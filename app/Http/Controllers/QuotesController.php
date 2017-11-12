<?php

namespace App\Http\Controllers;

use App\Quotes;
use App\Boardmembers;

use Illuminate\Http\Request;

class QuotesController extends Controller{

    public function index(){
        $quotes = Quotes::all();
        
        return view('back.quotes.index', compact('quotes'));
    }
    
    public function create(){
        $quotes = new Quotes;
        $author = Boardmembers::all()->pluck('board_name','board_id');

        return view('back.quotes.create', compact('quotes','author'));
    }
    
    public function store(Request $request){
        $quotes = new Quotes;

        $quotes->quote_detail  = $request->quote_detail;
        $quotes->members_id  = $request->members_id;

        $quotes->save();

        return redirect()->route('quotes.index')->with('Success','quotes Create Successfully');
    }
    
    public function show($id){
        $quotes = Quotes::findOrFail($id);

        return view('back.quotes.show', compact('quotes'));
    }
    
    public function edit($id){
        $quotes = Quotes::findOrFail($id);
        $author = Boardmembers::all()->pluck('board_name','board_id');

        return view('back.quotes.edit', compact('quotes','author'));
    }
    
    public function update(Request $request, $id){
        $quotes = Quotes::findOrFail($id);;

        $quotes->quote_detail  = $request->quote_detail;
        $quotes->members_id  = $request->members_id;

        $quotes->save();

        return redirect()->route('quotes.show', $quotes->quotes_id)->with('Success','quotes Create Successfully');
    }
    
    public function destroy(Quotes $Quotes){
        
    }
    
}
