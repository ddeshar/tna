<?php

namespace App\Http\Controllers;

use App\Banners;
use App\Boardmembers;
use App\Categories;
use App\Pages;
use App\Posts;
use App\Quotes;
use App\Tags;

use Mail;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class FrontController extends Controller{
    public function index(){
        $banners = Banners::all()->where('banner_position', '=', 1)->where('banner_status', '=', 'PUBLISHED');
        $sponsors = Banners::all()->where('banner_position', '=', 2)->where('banner_status', '=', 'PUBLISHED');
        $gallerys = Banners::all()->where('banner_position', '=', 3)->where('banner_status', '=', 'PUBLISHED');
        $quotes = Quotes::all();
        
        $newss = Posts::where('featured', '=', 1)->orderBy('created_at', 'desc')->take(10)->get();
        $posts = Posts::orderBy('created_at', 'desc')->take(10)->get();
        $postfooters = Posts::orderBy('created_at', 'desc')->take(3)->get();

        $first_post = Pages::orderBy('created_at', 'ASC')->first();
        $second_post = Pages::orderBy('created_at', 'ASC')->skip(1)->take(1)->get()->first();
        $third_post = Pages::orderBy('created_at', 'ASC')->skip(2)->take(1)->get()->first();

        
        return view('front.index', compact('banners','sponsors','gallerys','posts','newss','quotes','postfooters','first_post','second_post','third_post'));
    }

    public function about(){
        $aboutus = Pages::orderBy('created_at', 'ASC')->skip(3)->take(1)->get()->first();
        
        $sponsors = Banners::all()->where('banner_position', '=', 2)->where('banner_status', '=', 'PUBLISHED');
        $posts = Posts::orderBy('created_at', 'desc')->take(5)->get();
        $postfooters = Posts::orderBy('created_at', 'desc')->take(3)->get();
        $members = Boardmembers::orderBy('board_year', 'desc')->take(5)->get();
        
        return view('front.about', compact('postfooters','posts','sponsors','aboutus','members'));
    }

    public function news(){
        $newss = Posts::where('status', '=', 'PUBLISHED')->paginate(5);
        $postfooters = Posts::orderBy('created_at', 'desc')->take(3)->get();
        $posts = Posts::orderBy('created_at', 'desc')->take(5)->get();
        $tags = Tags::all();

        return view('front.news', compact('postfooters','posts','newss','tags'));
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

    public function postContact(Request $request){
        $this->validate($request, [
                'email' => 'required|email',
                'subject' => 'min:3',
                'message' => 'min:10'
            ]);
        
        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );

        Mail::send('front.layouts.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('jedeshar@gmail.com');
            $message->subject($data['subject']);
        });

        Session::flash('success', 'Your Email was sent!');

        return redirect('/');
    }

    public function article($slug){
        $article = Posts::where('slug', $slug)->first();

        $article->increment('view_count');

        $postfooters = Posts::orderBy('created_at', 'desc')->take(3)->get();
        $posts = Posts::orderBy('created_at', 'desc')->take(5)->get();
        $tags = Tags::all();       
        
        return view('front.article', compact('postfooters','posts','article','tags'));
    }

    public function category($slug){
        $categorys = Categories::where('slug', $slug)->first();

        $postfooters = Posts::orderBy('created_at', 'desc')->take(3)->get();
        $posts = Posts::orderBy('created_at', 'desc')->take(5)->get();
        $tags = Tags::all();

        return view('front.category', compact('categorys','posts','postfooters','tags'));
    }

    public function tag($tag){
        $ta = Tags::where('tag', $tag)->first();
        
        $tags = Tags::all();
        $postfooters = Posts::orderBy('created_at', 'desc')->take(3)->get();
        $posts = Posts::orderBy('created_at', 'desc')->take(5)->get();

        return view('front.tags', compact('tags','posts','postfooters','ta'));
    }
}
