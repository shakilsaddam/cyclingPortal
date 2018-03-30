<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_image extends Model
{
    public function blog_posts()
    {
        return $this->belongsTo('App\Blog_post');
    }
}
