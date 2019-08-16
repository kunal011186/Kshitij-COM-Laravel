<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $routeName = Route::currentRouteName();
        // if (strpos($routeName,'admin')>=0)
        // {
            $posts = Post::allPosts();
            return view('admin.posts',['posts'=>$posts]);
        // }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if (array_key_exists('id', $data))
        {
            $post = Post::find($data['id']);
            if ($data['action'] == 'save')
            {
                $post->updatePost($data);
            }
            else
            {
                $post->publish($data);
            }
        }
        else
        {
            Post::saveNewPost($data);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)
                ->first();
        return view('post',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.post',['post'=>$post]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // echo $id;
        $post = Post::destroy($id);
        return redirect()->route('admin-all-posts');
    }

    public function previous($id)
    {
        $slugOfPrevious = Post::previous($id);
        return redirect()->route('show-post',['slug'=>$slugOfPrevious]);
    }
}
