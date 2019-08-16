<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

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
        //$posts = Post::publishedPosts();
        // var_dump($posts);
        return view('index'/*,['posts'=>$posts]*/);
    }
}
