<?php

namespace App\Http\Controllers;

use App\Boardmembers;
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

        
      $years = [];
      $dateYear = date('Y');
      for ($i = 0; $i < 10; $i++) {
          $years[$dateYear - $i] = $dateYear - $i;
      }
        
        return view('back.board.create', compact('board','years'));
        
    }

    public function store(Request $request){

        $board = new Boardmembers;

        $board->board_position  = $request->board_position;
        $board->board_name      = $request->board_name;
        $board->board_image     = $request->board_image;
        $board->board_year      = $request->board_year;

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

              $years = [];
      $dateYear = date('Y');
      for ($i = 0; $i < 10; $i++) {
          $years[$dateYear - $i] = $dateYear - $i;
      }


        return view('back.board.edit', compact('board','years'));

    }

    public function update(Request $request, $id){

        $board = Boardmembers::findOrFail($id);

        $board->board_position  = $request->board_position;
        $board->board_name      = $request->board_name;
        $board->board_year      = $request->board_year;
        $oldFilename            = $board->board_image;

        // Check if file is present
        if( $request->hasFile('board_image') ) {
            $image     = $request->file('board_image');
            // get image filename and change it to timestamp variable
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            // make upload photo path variable
            $location = public_path('images/board/' . $filename );
            // use intervention library and save photo to path
            Image::make($image)->resize(1920, 1980)->save($location);
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
