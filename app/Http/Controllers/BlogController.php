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
        ('SELECT blog_posts.*,user_details.fname,user_details.lname,user_details.profile_photo
        FROM `blog_posts`, `user_details` 
        WHERE blog_posts.id = :blog_id AND blog_posts.posted_by=user_details.id
        ORDER BY date_of_posting
        LIMIT 2'), array("blog_id"=>$blog_id)
        );
        /*$blog_detail = DB::select(DB::raw
        ('SELECT * FROM `blog_posts` WHERE id = :blog_id'), array("blog_id"=>$blog_id)
        );*/

        $latest_posts = DB::select(DB::raw
        ('SELECT * FROM `blog_posts`
        ORDER BY date_of_posting
        LIMIT 3'));

        return view('blog.blog_detail', compact('blog_detail', 'latest_posts'));
    }
}
