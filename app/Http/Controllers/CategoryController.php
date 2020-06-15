<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Wp_term;
use App\Wp_term_relationship;
use DB;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
    public function showPosts($slug)
    {
        $termId=Wp_term::where('slug',$slug)->value('term_id');

        $category=Wp_term::where('slug',$slug)->value('name');

       // dd($termId);

        $objects= DB::table('wp_term_relationships')->where('term_taxonomy_id',$termId)->pluck('object_id');

        $posts = DB::table('wp_posts')->whereIn('ID', $objects);

        $publishPosts=$posts->where('post_status','publish')->orderBy('post_date', 'desc')->get();

       /* foreach ($publishPosts as $key => $value) {
            $featuredImg[$key]=DB::table('wp_posts')->where([
                                                                ['post_title', '=', $value->post_title],
                                                                ['post_type', '=', 'attachment']
                                                            ])->value('guid');
        }

        var_dump($featuredImg); */
        return view('category',['posts'=>$publishPosts,
                                'category'=>$category]);
    }
}
