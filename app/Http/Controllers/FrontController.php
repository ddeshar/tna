<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller{
    public function index(){
        return view('front.index');
    }

    public function about(){
        return view('front.about');
    }

    public function news(){
        return view('front.news');
    }

    public function board_members(){
        return view('front.BoardMembers');
    }

    public function contact(){
        return view('front.contact');
    }

    public function article(){
        return view('front.article');
    }
}
