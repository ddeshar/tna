<?php

namespace App\Http\Controllers;

use App\Banners;
use App\Posts;
use App\Quotes;
use App\Boardmembers;
use App\Tag;
use App\Categories;

use Illuminate\Http\Request;

class FrontController extends Controller{
    public function index(){
        $banners = Banners::all()->where('banner_position', '=', 1)->where('banner_status', '=', 'PUBLISHED');
        $sponsors = Banners::all()->where('banner_position', '=', 2)->where('banner_status', '=', 'PUBLISHED');
        $gallerys = Banners::all()->where('banner_position', '=', 3)->where('banner_status', '=', 'PUBLISHED');
        $posts = Posts::orderBy('created_at', 'desc')->take(10)->get();
        $newss = Posts::where('featured', '=', 1)->orderBy('created_at', 'desc')->take(10)->get();
        $postfooters = Posts::orderBy('created_at', 'desc')->take(3)->get();
        $quotes = Quotes::all();
        
        return view('front.index', compact('banners','sponsors','gallerys','posts','newss','quotes','postfooters'));
    }

    public function about(){
        
        $posts = Posts::orderBy('created_at', 'desc')->take(5)->get();
        $postfooters = Posts::orderBy('created_at', 'desc')->take(3)->get();
        $sponsors = Banners::all()->where('banner_position', '=', 2)->where('banner_status', '=', 'PUBLISHED');

        return view('front.about', compact('postfooters','posts','sponsors'));
    }

    public function news(){
        $newss = Posts::where('status', '=', 'PUBLISHED')->paginate(5);

        $postfooters = Posts::orderBy('created_at', 'desc')->take(3)->get();
        $posts = Posts::orderBy('created_at', 'desc')->take(5)->get();

        return view('front.news', compact('postfooters','posts','newss'));
    }

    public function board_members(){
        $members = Boardmembers::orderBy('board_year', 'desc')->take(5)->get();

        $postfooters = Posts::orderBy('created_at', 'desc')->take(3)->get();
        $posts = Posts::orderBy('created_at', 'desc')->take(5)->get();

        return view('front.BoardMembers', compact('postfooters','posts','members'));
    }

    public function contact(){
        $posts = Posts::orderBy('created_at', 'desc')->take(5)->get();

        $postfooters = Posts::orderBy('created_at', 'desc')->take(3)->get();
        $sponsors = Banners::all()->where('banner_position', '=', 2)->where('banner_status', '=', 'PUBLISHED');
        
        return view('front.contact', compact('postfooters','posts','sponsors'));
    }

    public function article($slug){
        $article = Posts::where('slug', $slug)->first();

        $postfooters = Posts::orderBy('created_at', 'desc')->take(3)->get();
        $posts = Posts::orderBy('created_at', 'desc')->take(5)->get();
        
        return view('front.article', compact('postfooters','posts','article'));
    }

    public function category($id){
        $categorys = Categories::find($id);

        $postfooters = Posts::orderBy('created_at', 'desc')->take(3)->get();
        $posts = Posts::orderBy('created_at', 'desc')->take(5)->get();

        return view('front.category', compact('categorys','posts','postfooters'));
    }

    public function tag($id){
        $tags = Tag::find($id);

        return view('tag', compact('tags'));
    }
}
