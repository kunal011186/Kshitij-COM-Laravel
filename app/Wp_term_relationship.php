<?php

namespace App;
use App\Wp_post;
use Illuminate\Database\Eloquent\Model;

class Wp_term_relationship extends Model
{
    public function post()
    {
    	return $this->belongsTo(Wp_post::class);
    }
}
