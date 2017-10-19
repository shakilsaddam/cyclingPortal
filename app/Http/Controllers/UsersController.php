<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_detail;
class UsersController extends Controller
{
    public function index()
    {
        //$user_details = User_detail::All();
        return view('user.search');
    }
    public function registration()
    {
        return view('user.registration');
    }
    public function store()
    {
        dd(request()->all());
    }
}
