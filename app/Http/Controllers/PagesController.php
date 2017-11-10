<?php

namespace App\Http\Controllers;

use App\Pages;
use Illuminate\Http\Request;

use Auth;
use Image;
use Storage;

class PagesController extends Controller{

    public function index(){
        $pages = Pages::all();

        return view('back.pages.index', compact('pages'));
    }
    
    public function create(){
        $pages = new Pages;

        return view('back.pages.create', compact('pages'));        
    }
    
    public function store(Request $request){
        $page = new Pages;

        $page->title            = $request->title;
        $page->excerpt          = $request->excerpt;
        $page->body             = $request->body;
        $page->slug             = $request->slug;
        $page->meta_description = $request->meta_description;
        $page->meta_keywords    = $request->meta_keywords;
        $page->status           = $request->status;

        // Check if file is present
        if( $request->hasFile('image') ) {
            $image     = $request->file('image');
            // get image filename and change it to timestamp variable
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            // make upload photo path variable
            $location = public_path('images/page/' . $filename );
            // use intervention library and save photo to path
            Image::make($image)->resize(640, 427)->save($location);
            // Set user image
            $page->image = $filename;
        }

        if (Auth::user()->id ) {
            $page->author_id = Auth::user()->id;
        }

        $page->save();

        return redirect()->route('pages.index')->with('Success','Post Create Successfully');  
        
    }
    
    public function show($id){
        $page = Pages::findOrFail($id);

        return view('back.pages.show', compact('page'));
    }
    
    public function edit($id){
        $pages = Pages::findOrFail($id);

        return view('back.pages.edit', compact('pages'));
    }
    
    public function update(Request $request, $id){
        $page = Pages::findOrFail($id);

        $page->title            = $request->title;
        $page->excerpt          = $request->excerpt;
        $page->body             = $request->body;
        $page->slug             = $request->slug;
        $page->meta_description = $request->meta_description;
        $page->meta_keywords    = $request->meta_keywords;
        $page->status           = $request->status;
        $oldFilename            = $page->image;

        // Check if file is present
        if( $request->hasFile('image') ) {
            $image     = $request->file('image');
            // get image filename and change it to timestamp variable
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            // make upload photo path variable
            $location = public_path('images/page/' . $filename );
            // use intervention library and save photo to path
            Image::make($image)->resize(640, 427)->save($location);
            // Set user image
            $page->image = $filename;
            // delete the old photo
            Storage::delete($oldFilename);
            // Set user image
        }

        if (Auth::user()->id ) {
            $page->author_id = Auth::user()->id;   // ถ้าใช้ auth::user  ต้อง use auth;
        }

        $page->save();

        return redirect()->route('pages.show', $page->id)->with('Success','Post Update Successfully');
    }
    
    public function destroy(Pages $Pages){
        
    }
    
}
