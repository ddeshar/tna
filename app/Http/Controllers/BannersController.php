<?php

namespace App\Http\Controllers;

use App\Banners;
use Illuminate\Http\Request;

use Image;
use Storage;

class BannersController extends Controller{

    public function index(){

        $banners = Banners::all();

        return view('back.banners.index', compact('banners'));
    }

    public function create(){

        $banners = new Banners;

        return view('back.banners.create', compact('banners'));
    }

    public function store(Request $request){

        $banner = new Banners;

        $banner->banner_name            = $request->banner_name;
        $banner->banner_description     = $request->banner_description;
        $banner->banner_class           = $request->banner_class;
        $banner->banner_status          = $request->banner_status;
        
        $banner->banner_image           = $request->banner_image;

        // Check if file is present
        if( $request->hasFile('banner_image') ) {
            $image     = $request->file('banner_image');
            // get image filename and change it to timestamp variable
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            // make upload photo path variable
            $location = public_path('images/banners/' . $filename );
            // use intervention library and save photo to path
            Image::make($image)->resize(1920, 1280)->save($location);
            // Set user image
            $banner->banner_image = $filename;
        }

        $banner->save();

        return redirect()->route('banners.index')->with('Success','banners Create Successfully');  
    }

    public function show($id){

        $banners = Banners::findOrFail($id);

        return view('back.banners.show', compact('banners'));
    }

    public function edit($id){

        $banners = Banners::findOrFail($id);

        return view('back.banners.edit', compact('banners'));
    }

    public function update(Request $request, $id){
         
        $banner = Banners::findOrFail($id);

        $banner->banner_name            = $request->banner_name;
        $banner->banner_description     = $request->banner_description;
        $banner->banner_class           = $request->banner_class;
        $banner->banner_status          = $request->banner_status;

        $oldFilename                    = $banner->banner_image;

        // Check if file is present
        if( $request->hasFile('banner_image') ) {
            $image     = $request->file('banner_image');
            // get image filename and change it to timestamp variable
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            // make upload photo path variable
            $location = public_path('images/banners/' . $filename );
            // use intervention library and save photo to path
            Image::make($image)->resize(1920, 1980)->save($location);
            // Set user image
            $banner->banner_image = $filename;
            // delete the old photo
            Storage::delete($oldFilename);
            // Set user image
        }

        $banner->save();

        return redirect()->route('banners.show', $banner->banner_id)->with('Success','Post Update Successfully');
    }

    public function destroy(Banners $Banners){

    }

}
