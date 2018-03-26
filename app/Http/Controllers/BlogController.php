<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
    public function index()
    {

        $blog_posts = DB::select(DB::raw('SELECT blog_posts.*,user_details.fname,user_details.lname,user_details.profile_photo FROM
        `blog_posts`, `user_details` 
        WHERE blog_posts.posted_by=user_details.id'));
        //return $blog_posts;
        return view('blog.index',compact('blog_posts'));
    }

    public function detail($blog_id)
    {
        $blog_detail = DB::select(DB::raw
        ('SELECT * FROM `blog_posts` WHERE id = :blog_id'), array("blog_id"=>$blog_id)
        );

        //return $blog_detail[0]->title;
        //$title = $blog_detail;

        //$title = $blog_detail->title;
        //return $title;
        return view('blog.blog_detail', compact('blog_detail'));
    }
}
