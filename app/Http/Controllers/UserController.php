<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Storage;

use Session;
use Hash;
use DB;
use Image;
use File;

class UserController extends Controller{
    public function index(){
      $users = User::all();

      return view('back.user.index', compact('users'));
    }

    public function create() {
      $user = new User;

      return view('back.user.create',compact('user'));
    }

    public function store(Request $request){

      //validate the data
      $this->validate($request,array(
        'name' => 'required|max:255',
        'email' => 'required',
        'password' => 'required'
      ));

      // Bcrypt hashing for storing user passwords
      $Password = Hash::make($request->password);

      // store in database
      $user = new User;

      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = $Password;

      // Check if file is present
      if( $request->hasFile('avatar') ) {
          $image     = $request->file('avatar');
          // get image filename and change it to timestamp variable
          $filename  = time() . '.' . $image->getClientOriginalExtension();
          // make upload photo path variable
          $location = public_path('images/user/' . $filename );
          // use intervention library and save photo to path
          Image::make($image)->resize(800, 400)->save($location);
          // Set user image
          $user->avatar = $filename;
      }

      $user->save();

      // Session flash message
      Session::flash('flash_message', 'User successfully added!');

      // refirect to another page
      return redirect()->route('user.index');
    }

    public function show($id) {
      $user = User::findOrFail($id);

      return view('back.user.show')->with('user', $user);
    }

    public function edit($id) {
        $user = User::findOrFail($id);

        return view('back.user.edit',compact('user'));
    }

    public function update(Request $request, $id) {
      $user = User::findOrFail($id);

      //validate the data
      $this->validate($request,array(
        'name' => 'required|max:255',
        'email' => 'required'
      ));

      $Password = Hash::make($request->input('password'));
      
      // store in database
      $user = User::find($id);
      
      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->password = $Password;
      
      // Check if file is present
      if( $request->hasFile('avatar') ) {
        // get oldimage name to varable for delete it from databse
        $oldFilename = $user->avatar;

        $image     = $request->file('avatar');
        // get image filename and change it to timestamp variable
        $filename  = time() . '.' . $image->getClientOriginalExtension();
        // make upload photo path variable
        $location = public_path('images/user/' . $filename );
        // use intervention library and save photo to path
        Image::make($image)->resize(400, 400)->save($location);
        // update the database
        $user->avatar = $filename;
        // delete the old photo
        // Storage::delete(public_path() . '\\images\user\\' . $oldFilename);
        File::delete(public_path() . '\\images\user\\' . $oldFilename);
      }

      $user->save();

      return redirect()->route('user.index');
    }

    public function destroy(User $user){

    }
}
