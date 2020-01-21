<?php

namespace App\Http\Controllers;

use URL;

use Log;

use DB;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Post;

use App\Wp_post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application admin dashboard.
     */

    public function welcome()
    {
        $posts = Wp_post::all()->where('post_status','publish')->toArray();

        
       return view('index',compact('posts'));
    }

    public function testPost()
    {
        $data ="";

        $data= DB::table('wp_posts')->where('post_title', 'Investing - Where do we want to be right - Short Term or Long Term?')->get();

        var_dump($data);

       // $data= Post::getData();
        
        //return view('post',array('data'=> $data))->render();
    }
}
