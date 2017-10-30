<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User_detail;
use DB;

class FetchUserInfoController extends Controller
{
    public function fetchBikeInfo()
    {
        $bikes = DB::table('bike_info')->get();
        $personal_info = User_detail::where('id','=','1')->get();
        //return $personal_info;
        return view('user.userhome',compact('bikes','personal_info'));
        //return view('user.userhome')->with('bikes',$bikes,'personal_info',$personal_info);
    }
}
