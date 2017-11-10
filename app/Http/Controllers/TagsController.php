<?php

namespace App\Http\Controllers;

use App\Tags;
use Illuminate\Http\Request;

class TagsController extends Controller{

    public function index(){
        $Tags = Tags::all();

        return view('back.tags.index', compact('Tags'));
    }
    
    public function create(){
        $Tags = new Tags;

        return view('back.tags.create', compact('Tags'));
    }
    
    public function store(Request $request){
        $Tags = new Tags;

        $Tags->tag  = $request->tag;

        $Tags->save();

        return redirect()->route('tags.index')->with('Success','Tags Create Successfully');
    }
    
    public function show($id){
        $Tags = Tags::findOrFail($id);

        return view('back.tags.show', compact('Tags'));
    }
    
    public function edit($id){
        $Tags = Tags::findOrFail($id);

        return view('back.tags.edit', compact('Tags'));
    }
    
    public function update(Request $request, $id){
        $Tags = Tags::findOrFail($id);;

        $Tags->tag  = $request->tag;

        $Tags->save();

        return redirect()->route('tags.show', $Tags->author_id)->with('Success','Tags Create Successfully');
    }
    
    public function destroy(Tags $Tags){
        
    }
    
}
