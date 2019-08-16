<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Post;

class RandomPostLink extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //
        $post = Post::random();
        return view("widgets.random_post_link", [
            'url' => route('show-post',['slug'=>$post->slug]),
            'title' => $post->title,
        ]);
    }
}