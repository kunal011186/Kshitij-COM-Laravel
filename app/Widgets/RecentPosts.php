<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Post;

class RecentPosts extends AbstractWidget
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
        $posts = Post::recentPosts(5);
        return view("widgets.recent_posts", [
            'posts' => $posts,
        ]);
    }
}