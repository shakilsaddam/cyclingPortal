<?php

namespace App\Http\Controllers;

use App\Blog_image;
use App\Blog_post;
use App\Http\Requests\UploadPhotoRequest;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Request;
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

        $latest_posts = DB::select(DB::raw
        ('SELECT * FROM `blog_posts`
        ORDER BY date_of_posting DESC
        LIMIT 3'));

        $blog_images = DB::select(DB::raw
        ('SELECT * FROM `blog_images` WHERE blog_id =:blog_id'
        ), array("blog_id"=>$blog_id)
        );

        $blog_updates = DB::select(DB::raw
        ('SELECT * FROM `blog_updates` WHERE blog_id =:blog_id'
        ), array("blog_id"=>$blog_id)
        );

        $count_all_posts = DB::select(DB::raw
        ('SELECT COUNT(id) AS total FROM blog_posts')
        );

        $count_long_trip = DB::select(DB::raw
        ('SELECT COUNT(id) AS total FROM blog_posts WHERE category = "Long Trip"')
        );

        $count_short_trip = DB::select(DB::raw
        ('SELECT COUNT(id) AS total FROM blog_posts WHERE category = "Short Trip"')
        );

        $count_cross_country = DB::select(DB::raw
        ('SELECT COUNT(id) AS total FROM blog_posts WHERE category = "Cross Country"')
        );


        return view('blog.blog_detail', compact('blog_detail', 'latest_posts', 'count_all_posts', 'count_long_trip', 'count_short_trip', 'count_cross_country','blog_images','blog_updates'));
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

    public function index1($url_name)
    {
        switch ($url_name)
        {
            case 'home':
                $blog_posts = DB::select(DB::raw('SELECT blog_posts.*,user_details.fname,user_details.lname,user_details.profile_photo FROM
                `blog_posts`, `user_details` 
                WHERE blog_posts.posted_by=user_details.id'));
                $to_active = 'home';
                return view('blog.index',compact('blog_posts','to_active'));
                break;

            case 'CrossCountry':
                $blog_posts = DB::select(DB::raw('SELECT blog_posts.*,user_details.fname,user_details.lname,user_details.profile_photo FROM
                `blog_posts`, `user_details` 
                WHERE blog_posts.posted_by=user_details.id AND blog_posts.category="Cross Country"'));
                $to_active = 'CrossCountry';
                return view('blog.index',compact('blog_posts','to_active'));
                break;

            case 'LongTrip':
                $blog_posts = DB::select(DB::raw('SELECT blog_posts.*,user_details.fname,user_details.lname,user_details.profile_photo FROM
                `blog_posts`, `user_details` 
                WHERE blog_posts.posted_by=user_details.id AND blog_posts.category="long trip"'));
                $to_active = 'LongTrip';
                return view('blog.index',compact('blog_posts','to_active'));
                break;

            case 'ShortTrip':
                $blog_posts = DB::select(DB::raw('SELECT blog_posts.*,user_details.fname,user_details.lname,user_details.profile_photo FROM
                `blog_posts`, `user_details` 
                WHERE blog_posts.posted_by=user_details.id AND blog_posts.category="short trip"'));
                $to_active = 'ShortTrip';
                return view('blog.index',compact('blog_posts','to_active'));
                break;

            default :

                return abort(404);
                //return response()->view('errors.404',[],404);
                //return redirect('/blogs/home');
        }
    }

    public function createBlog()
    {
        //$blog_updates = \App\Blog_post::find(1)->blog_updates;
        /*$blog_posts = \App\Blog_post::find(1);
        $blog_images = \App\Blog_post::find(1);
        return $blog_posts;*/
        return view('blog.createBlogPost');
    }

    public function storeBlog(UploadPhotoRequest $request)
    {

        $blog_posts = new Blog_post;

        $blog_posts->posted_by = 1;
        $blog_posts->title = request('blog_title');
        $blog_posts->description = request('description');
        $blog_posts->category = request('category');
        $blog_posts->date_of_posting = new \DateTime();

        $cover_picture = Input::file('cover_photo');
        $cover_picture_name = uniqid().$cover_picture->getClientOriginalName();
        /*$cover_picture_name = $cover_picture->getClientOriginalName();*/
        $cover_picture->move('blog_img/photo',$cover_picture_name);

        $blog_posts->cover_photo = $cover_picture_name;
        $blog_posts->save();

        //return "Uploaded";


        $images = Request::file('photo_gallery');

        //If the array is not empty

        if(!is_null($images))
        {
            foreach($images as $file) {
                // Set the destination path
                $destinationPath = 'blog_img/photo';
                // Get the orginal filname or create the filename of your choice
                $filename = uniqid().$file->getClientOriginalName();
                // Copy the file in our upload folder
                $file->move($destinationPath, $filename);

                Blog_image::create([
                    'blog_id' => $blog_posts->id,
                    'image_name' => $filename,
                ]);
            }
            /*echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password !!!")';
            echo '</script>';
            return view('blog.createBlogPost');*/
        }

        echo '<script language="javascript">';
        echo 'alert("Invalid Username or Password !!!")';
        echo '</script>';

        return redirect('/blogs/home');



        /*foreach (Input::file('photo_gallery') as $gallery)
        {
            //$filename = $gallery->getClientOriginalName();
                $destinationPath = 'blog_img/photo';
                $filename = $gallery->getClientOriginalName();
                $gallery->move($destinationPath, $filename);

                Blog_image::create([
                    'blog_id' => $blog_posts->id,
                    'image_' => 'dhaka.jpg',
                ]);
                return 'successfull';

                //$projectcommunication->media = $filename;


            //return $filename;
        }*/

        /*if ($request->file('photo_gallery'))
        {
            foreach ($request->file('photo_gallery') as $gallery)
            {
                //$filename = $gallery->getClientOriginalName();
                if (!empty($gallery))
                {
                    $destinationPath = '/blog_img/photo';
                    $filename = $gallery->getClientOriginalName();
                    $gallery->move($destinationPath, $filename);*/

                    /*Blog_image::create([
                        'blog_id' => $blog_posts->id,
                        'image_name' => 'dhaka.jpg',
                    ]);*/
                    //return 'successfull';

                    //$projectcommunication->media = $filename;

               // }
                //return $filename;
            //}
       // }


        /*foreach ($request->photo_gallery as $photo)
        {
            return $photo;*/
            /*$filename = $photo->store('uploads');
            Blog_image::create([
                'blog_id' => $blog_posts->id,
                'image_name' => $filename
            ]);
            return 'Upload Successful';*/
        /*}*/



        /*foreach ($request->photo_gallery as $photo)
        {
            $filename = $photo->store('uploads');
            Blog_image::create([
                'blog_id' => $blog_posts->id,
                'image_name' => $filename
            ]);
            return 'Upload Successful';
        }*/

        //return redirect('/blogs/home');




        /*$title = $request->input('blog_title');
        $date_of_travelling = $request->input('date_of_travelling');
        $category = $request->input('category');
        $description = $request->input('description');

        DB::insert('insert into blog_posts (posted_by,title,description,categories,date_of_posting,images,video,last_updated) VALUES (?,?,?,?,?,?,?,?)',[1,$title,$description,$category,$date_of_travelling,'shakil.jpg','vid.mp4','2018-03-29']);
        echo "Record inserted successfully.<br/>";*/
        //return $description;
        //return view('blog.createBlogPost', compact('description'));

    }

}
