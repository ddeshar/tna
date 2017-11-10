<?php

namespace App\Http\Controllers;

use Auth;
use App\Posts;
use App\Tags;
use App\Categories;
use Illuminate\Http\Request;

use Image;
use Storage;

class PostsController extends Controller{
    
    public function index(){
        $posts = Posts::all();

        return view('back.posts.index', compact('posts'));        
    }
    
    public function create(){
        $post = new Posts;
        $tags = Tags::all();
        $categories = Categories::all()->pluck('name','id');

        return view('back.posts.create', compact('post','categories','tags'));
    }
    
    public function store(Request $request){
        $post = new Posts;
        $post->category_id      = $request->category_id;
        $post->title            = $request->title;
        $post->seo_title        = $request->seo_title;
        $post->body             = $request->body;
        $post->slug             = $request->slug;
        $post->meta_description = $request->meta_description;
        $post->meta_keywords    = $request->meta_keywords;
        $post->status           = $request->status;
        $post->featured         = $request->featured;

        // Check if file is present
        if( $request->hasFile('image') ) {
            $image     = $request->file('image');
            // get image filename and change it to timestamp variable
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            // make upload photo path variable
            $location = public_path('images/posts/' . $filename );
            // use intervention library and save photo to path
            Image::make($image)->resize(640, 427)->save($location);
            // Set user image
            $post->image = $filename;
        }

        if (Auth::user()->id ) {
            $post->author_id = Auth::user()->id;   // ถ้าใช้ auth::user  ต้อง use auth;
        }
        $post->save();

        $post->tags()->attach($request->tags);

        return redirect()->route('posts.index')->with('Success','Post Create Successfully');  
    }
    
    public function show($id){
        $post = Posts::findOrFail($id);
        
        $post->increment('view_count');

        return view('back.posts.show', compact('post'));
    }
    
    public function edit($id){
        $post = Posts::findOrFail($id);
        $tags = Tags::all();
        $categories = Categories::all()->pluck('name','id');

        return view('back.posts.edit', compact('post','categories','tags'));
    }
    
    public function update(Request $request, $id){
        $post = Posts::findOrFail($id);
        $post->category_id      = $request->category_id;
        $post->title            = $request->title;
        $post->seo_title        = $request->seo_title;
        $post->body             = $request->body;
        $post->slug             = $request->slug;
        $post->meta_description = $request->meta_description;
        $post->meta_keywords    = $request->meta_keywords;
        $post->status           = $request->status;
        $post->featured         = $request->featured;
        $oldFilename            = $post->image;

        // Check if file is present
        if( $request->hasFile('image') ) {
            $image     = $request->file('image');
            // get image filename and change it to timestamp variable
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            // make upload photo path variable
            $location = public_path('images/posts/' . $filename );
            // use intervention library and save photo to path
            Image::make($image)->resize(640, 427)->save($location);
            // Set user image
            $post->image = $filename;
            // delete the old photo
            Storage::delete($oldFilename);
            // Set user image
        }

        if (Auth::user()->id ) {
            $post->author_id = Auth::user()->id;   // ถ้าใช้ auth::user  ต้อง use auth;
        }
        $post->save();

        $post->tags()->sync($request->tags);

        return redirect()->route('posts.show', $post->id)->with('Success','Post Update Successfully');
    }
    
    public function destroy(Posts $Posts){
        
    }
    
}
