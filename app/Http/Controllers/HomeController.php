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

use Carbon\Carbon;

use App\Wp_term;
use App\Wp_term_relationship;

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

        $dataSettings=[];

        $publishPosts=[];

        $dataSettings['risk-management']= 'Forex Risk Management';

        $dataSettings['investment-psychology']= 'Investment Psychology';

        $dataSettings['research']= 'Research';

        $dataSettings['global-equities']= 'Global Equities';

        $dataSettings['longterm-forex-forecasts']= 'Longterm Forex Forecasts';

        //For Recent posts
        $termId=Wp_term::where('slug','top-stories')->value('term_id');

        $objects= DB::table('wp_term_relationships')->where('term_taxonomy_id',$termId)->pluck('object_id');

        $posts = DB::table('wp_posts')->whereIn('ID', $objects);

        $currentPosts=$posts->where('post_status','publish')->orderBy('post_date', 'desc')->take(5)->get();
        //end
        //for all category
        foreach ($dataSettings as $key => $value) {

        $termId=Wp_term::where('slug',$key)->value('term_id');

        $objects= DB::table('wp_term_relationships')->where('term_taxonomy_id',$termId)->pluck('object_id');

        $posts = DB::table('wp_posts')->whereIn('ID', $objects);

        $publishPosts[$key]=$posts->where('post_status','publish')->orderBy('post_date', 'desc')->take(3)->get();
    
        }
        //end

        $latestPost = Wp_post::where('post_status','publish')->latest('post_date')->first();

        $dt = Carbon::now();
       return view('index',['posts'=>$publishPosts,
                            'dataSettings'=>$dataSettings,
                            'currentPosts'=>$currentPosts,
                            'latestPost'=>$latestPost,
                            'dt'=>$dt
                            ]);
    }

   
}
