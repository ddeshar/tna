<?php

namespace App\Http\Controllers;

use App\Backend;
use App\Posts;
use App\Pages;
use App\Banners;
use App\Boardmembers;

use Illuminate\Http\Request;
use DB;

class BackendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
            $posts = DB::table('posts')->count();
            $pages = DB::table('pages')->count();
            $banners = DB::table('banners')->count();
            $board_members = DB::table('board_members')->count();

        return view('back.index', compact('posts','pages','banners','board_members'));
    }
}