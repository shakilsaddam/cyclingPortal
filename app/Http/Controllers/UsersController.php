<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_detail;
use Illuminate\Support\Facades\Input;

class UsersController extends Controller
{
    public function index()
    {
        //$user_details = User_detail::All();
        return view('user.search');
    }
    public function create()
    {
        return view('user.registration');
    }
    public function store()
    {
        //dd(request()->all());

        $registration_data = new User_detail;
        $registration_data->fname = request('fname');
        $registration_data->lname = request('lname');
        $registration_data->email_address = request('email_address');
        $registration_data->password = request('password');
        $registration_data->mobile_no = request('mobile_no');
        $registration_data->facebook_id = request('facebook_id');
        $registration_data->email_address = request('email_address');
        $registration_data->present_address = request('present_address');

        $file = Input::file('profile_photo');
        $filename = time()."-".$file->getClientOriginalName();
        $file->move('uploads',$filename);

        $registration_data->profile_photo = $filename;

        /*$file = Input::file('profile_photo');
        $time = time();
        $file->move('uploads',$file->getClientOriginalName());
        echo $file->time().getClientOriginalName();
        $registration_data->profile_photo = $file->time().getClientOriginalName();
    */
        //$registration_data->profile_photo = request('profile_photo');
        $registration_data->profile_id = random_int(24534, 50483);
        $registration_data->save();
        return redirect('home');
    }

    public function userhome()
    {
        $registration_data=User_detail::All();
        return $registration_data;
    }
}
