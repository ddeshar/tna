<?php

namespace App\Http\Controllers;

use App\Boardmembers;
use App\Boarddepartments;
use App\Boardpost;
use App\Province;

use Illuminate\Http\Request;

use Image;
use Storage;

class BoardMembersController extends Controller{

    public function index(){

        $boards = Boardmembers::all();

        return view('back.board.index', compact('boards'));
        
    }

    public function create(){

        $board = new Boardmembers;

        $Boarddepartments = Boarddepartments::all()->pluck('department_name','department_id');
        $Boardpost = Boardpost::all()->pluck('bpost_name','bpost_id');
        $Province = Province::all()->pluck('PROVINCE_NAME_ENG','PROVINCE_ID');

        $years = [];
        $dateYear = date('Y');
        for ($i = 0; $i < 10; $i++) {
            $years[$dateYear - $i] = $dateYear - $i;
        }
        
        return view('back.board.create', compact('board','years','Boarddepartments', 'Boardpost', 'Province'));
        
    }

    public function store(Request $request){

        $board = new Boardmembers;

        $board->board_position  = $request->board_position;
        $board->board_name      = $request->board_name;
        $board->board_image     = $request->board_image;
        $board->board_year      = $request->board_year;
        $board->board_tel       = $request->board_tel;
        $board->board_dep       = $request->board_dep;
        $board->board_branch    = $request->board_branch;

        // Check if file is present
        if( $request->hasFile('board_image') ) {
            $image     = $request->file('board_image');
            // get image filename and change it to timestamp variable
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            // make upload photo path variable
            $location = public_path('images/board/' . $filename );
            // use intervention library and save photo to path
            Image::make($image)->resize(1920, 1280)->save($location);
            // Set user image
            $board->board_image = $filename;
        }

        $board->save();

        return redirect()->route('board.index')->with('Success','board Create Successfully');   
        
    }

    public function show($id){

        $board = Boardmembers::findOrFail($id);

        return view('back.board.show', compact('board'));

        
    }

    public function edit($id){
        
        $board = Boardmembers::findOrFail($id);

        $Boarddepartments = Boarddepartments::all()->pluck('department_name','department_id');
        $Boardpost = Boardpost::all()->pluck('bpost_name','bpost_id');
        $Province = Province::all()->pluck('PROVINCE_NAME_ENG','PROVINCE_ID');

        $years = [];
        $dateYear = date('Y');
        for ($i = 0; $i < 10; $i++) {
            $years[$dateYear - $i] = $dateYear - $i;
        }

        return view('back.board.edit', compact('board','years','Boarddepartments', 'Boardpost', 'Province'));

    }

    public function update(Request $request, $id){

        $board = Boardmembers::findOrFail($id);

        $board->board_position  = $request->board_position;
        $board->board_name      = $request->board_name;
        $board->board_year      = $request->board_year;
        $board->board_tel       = $request->board_tel;
        $board->board_dep       = $request->board_dep;
        $board->board_branch    = $request->board_branch;

        // Check if file is present
        if( $request->hasFile('board_image') ) {
            $oldFilename            = $board->board_image;
            $image     = $request->file('board_image');
            // get image filename and change it to timestamp variable
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            // make upload photo path variable
            $location = public_path('images/board/' . $filename );
            // use intervention library and save photo to path
            Image::make($image)->save($location);
            // Set user image
            $board->board_image = $filename;
            // delete the old photo
            Storage::delete($oldFilename);
            // Set user image
        }

        $board->save();

        return redirect()->route('board.show', $board->board_id)->with('Success','Post Update Successfully');

    }

    public function destroy(Boardmembers $Boardmembers){

    }
}
