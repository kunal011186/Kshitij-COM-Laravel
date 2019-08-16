<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public static function saveNewPost($data)
    {
        $post = new Post;
        $post->postdate = $data['postdate'];
        $post->content = $data['content'];
        $post->title = $data['title'];
        $post->excerpt = $data['excerpt'];
        $post->slug = $data['slug'];
        $post->published = false;
        $post->save();
    }

    public function updatePost($data)
    {
        $this->postdate = $data['postdate'];
        $this->content = $data['content'];
        $this->title = $data['title'];
        if (strlen($data['excerpt'])==0)
        {
            $content = strip_tags($data['content']);
            if (preg_match('/^.{1,300}\b/s', $content, $match))
            {
                $this->excerpt = $match[0];

            }
            else
            {
                $this->excerpt = $substr($content,0,300);
            }
        }
        else
            $this->excerpt = $data['excerpt'];
        $this->slug = $data['slug'];
        $this->published = $data['published'];
        $this->save();
    }

    public function publish($data)
    {
        $this->updatePost($data);
        $this->published = 1;
        $this->save();
    }

    public static function allPosts()
    {
        $posts = Post::orderBy('postdate','desc')
                    ->get();
        return $posts;
    }

    public static function publishedPosts()
    {
        $posts = Post::where('published',1)
                    ->orderBy('postdate','desc')
                    ->get();
        return $posts;
    }

    public static function recentPosts($howMany)
    {
        $posts = Post::where('published',1)
                    ->orderBy('postdate','desc')
                    ->take($howMany)
                    ->get();
        return $posts;
    }

    public static function previous($id)
    {
        $post = Post::find($id);
        $previous = Post::where('postdate','<',$post->postdate)
                        ->orderBy('postdate','desc')
                        ->first();
        return $previous->slug;
    }

    public static function random()
    {
        $post = Post::inRandomOrder()->first();
        // var_dump($post);
        return $post;
    }

}
