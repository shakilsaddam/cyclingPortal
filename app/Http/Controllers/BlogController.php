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

        $count_all_posts = DB::select(DB::raw
        ('SELECT COUNT(id) AS total FROM blog_posts')
        );

        $count_long_trip = DB::select(DB::raw
        ('SELECT COUNT(id) AS total FROM blog_posts WHERE categories = "Long Trip"')
        );

        $count_short_trip = DB::select(DB::raw
        ('SELECT COUNT(id) AS total FROM blog_posts WHERE categories = "Short Trip"')
        );

        $count_cross_country = DB::select(DB::raw
        ('SELECT COUNT(id) AS total FROM blog_posts WHERE categories = "Cross Country"')
        );


        return view('blog.blog_detail', compact('blog_detail', 'latest_posts', 'count_all_posts', 'count_long_trip', 'count_short_trip', 'count_cross_country'));
    }


    public function longTrip()
    {
        return 'Long Trips';
    }

    public function shortTrip()
    {
        return 'Short Trips';
    }


    public function crossCountry()
    {
        return 'Cross Country';
    }
}
