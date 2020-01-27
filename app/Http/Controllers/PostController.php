<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Post;
use App\Wp_post;
use App\Wp_term_relationship;
use App\Wp_term;
use DB;
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

    public function show($slug)
    {
        $postQuery=Wp_post::where('post_name', $slug);
        $postdata = $postQuery->value('post_content');  //DB::table('wp_posts')->where('post_name', $slug)->get(); 
        $postTitle = $postQuery->value('post_title');
        $postId = $postQuery->value('ID');
        $postTime = $postQuery->value('post_modified');
        $authorId = $postQuery->value('post_author');
        $termID=Wp_term_relationship::where('object_id', $postId)->value('term_taxonomy_id');
        if(!$termID)
        $category='';
        else
        $category=Wp_term::where('term_id', $termID)->value('name');
        $categoryLink=Wp_term::where('term_id', $termID)->value('slug');


        $authorFname=DB::table('wp_usermeta')->where([
                                ['user_id', '=', $authorId],
                                ['meta_key', '=', 'first_name'],
                            ])->value('meta_value');

        $authorLname=DB::table('wp_usermeta')->where([
                                ['user_id', '=', $authorId],
                                ['meta_key', '=', 'last_name'],
                            ])->value('meta_value');

        $author=$authorFname." ".$authorLname;

        $authorDesc=DB::table('wp_usermeta')->where([
                                ['user_id', '=', $authorId],
                                ['meta_key', '=', 'description'],
                            ])->value('meta_value');
                                    
       // dd($author);





        return view('post',['postdata'=>$postdata,
                            'postTitle'=>$postTitle,
                            'postTime'=>$postTime,
                            'category'=>$category,
                            'categoryLink'=>$categoryLink,
                            'author'=>$author,
                            'authorDesc'=>$authorDesc]);
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
