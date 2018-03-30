<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_post extends Model
{
    public function blog_updates()
    {
        return $this->hasMany('App\Blog_update','blog_id');
    }

    public function blog_images()
    {
        return $this->hasMany('App\Blog_image','blog_id');
    }

    protected $fillable = [
        'id','posted_by'
    ];
    public $timestamps = false;
}
