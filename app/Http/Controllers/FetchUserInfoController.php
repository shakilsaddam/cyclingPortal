<?php

namespace App\Http\Controllers;

//use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User_detail;
use DB;
use Session;

class FetchUserInfoController extends Controller
{
    public function fetchBikeInfo()
    {
        $user_id = Session::get('user_id');
        //$bikes = DB::table('bike_info')->where('id','=','1')->get();
    $bikes = DB::select(DB::raw
    ('select bike_info.brand,bike_info.model,bike_info.chasses_no,bike_info.present_status
    FROM bike_info
    JOIN bike_history
    ON bike_info.id=bike_history.bike_id
    JOIN user_details
    ON bike_history.user_id=user_details.id
    WHERE user_details.id= :user_id'),array(
    'user_id' => $user_id,)
    );


        //$bikes = DB::table('bike_info')->where('id','=','?')->get();
        $personal_info = User_detail::where('id','=',$user_id)->get();

        //return $personal_info;
        return view('user.userhome',compact('bikes','personal_info'));
        //return view('user.userhome')->with('bikes',$bikes,'personal_info',$personal_info);
    }
}
