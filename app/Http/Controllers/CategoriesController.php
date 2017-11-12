<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller{

    public function index(){
        $categories = Categories::all();

        return view('back.categories.index', compact('categories'));
    }

    public function create(){
        $Category = new Categories;
        $select_Category = Categories::all()->pluck('name','id');

        return view('back.categories.create', compact('Category','select_Category'));
    }

    public function store(Request $request){
        $Category = new Categories;

        $Category->parent_id    = $request->parent_id;
        $Category->order        = $request->order;
        $Category->name         = $request->name;
        $Category->slug         = $request->slug;

        $Category->save();

        return redirect()->route('categories.index')->with('Success','Category Create Successfully');
    }
    
    public function show($id){
        $Category = Categories::findOrFail($id);

        return view('back.categories.show', compact('Category'));
    }
    
    public function edit($id){
        $Category = Categories::findOrFail($id);
        
        $select_Category = Categories::all()->pluck('name','id');

        return view('back.categories.edit', compact('Category','select_Category'));
    }
    
    public function  update(Request $request, $id){
        $Category = Categories::findOrFail($id);

        $Category->parent_id    = $request->parent_id;
        $Category->order        = $request->order;
        $Category->name         = $request->name;
        $Category->slug         = $request->slug;

        $Category->save();

        return redirect()->route('categories.show', $Category->id)->with('Success','Category Update Successfully');
    }
    
    public function destroy(Categories $Categories){
        
    }
    
}
