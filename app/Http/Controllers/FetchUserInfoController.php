<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class FetchUserInfoController extends Controller
{
    public function fetchBikeInfo()
    {
        $bikes = DB::table('bike_info')->get();
        return view('user.userhome')->with('bikes',$bikes);
    }
}
