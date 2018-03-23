<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
    public function index()
    {

        $blog_posts = DB::select(DB::raw('SELECT * FROM `blog_posts`'));
        //return $blog_posts;
        return view('blog.index',compact('blog_posts'));
    }
}
