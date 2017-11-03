<?php

namespace App\Http\Controllers;

//use Illuminate\Contracts\Session\Session;
use App\Bike_history;
use App\Bike_info;
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
        ('select bike_infos.brand,bike_infos.bike_model,bike_infos.chasses_no,bike_infos.present_status
        FROM bike_infos
        JOIN bike_histories
        ON bike_infos.id=bike_histories.bike_id
        JOIN user_details
        ON bike_histories.user_id=user_details.id
        WHERE user_details.id= :user_id'),array(
        'user_id' => $user_id,)
    );

        $personal_info = User_detail::where('id','=',$user_id)->get();

        //return $personal_info;
        return view('user.userhome',compact('bikes','personal_info'));
        //return view('user.userhome')->with('bikes',$bikes,'personal_info',$personal_info);
    }

    public function addNewBike()
    {
        return view('user.addbike');
    }

    public function addBikeStore()
    {
        //dd(request()->all());

        $bike_info_data = new Bike_info;

        //$bike_info_data->id = '1';
        $bike_info_data->brand = request('bike_brand');
        $bike_info_data->bike_model = request('bike_model');
        $bike_info_data->chasses_no = request('chasses_no');
        $bike_info_data->bike_photo = request('bike_photo');
        $bike_info_data->buying_recept = request('buying_recept');
        $bike_info_data->description = request('bike_description');
        $bike_info_data->component_change_detail= request('change_description');
        $bike_info_data->present_status= request('present_status');
        $bike_info_data->bike_reg_date= new \DateTime();

        $bike_info_data->save();

        echo '<script language="javascript">';
        echo 'alert("Sucessfully Inserted !!!")';
        echo '</script>';

        $last_id = Bike_info::select('id')->max('id');

        Bike_history::insert([
            'user_id' => Session::get('user_id'),
            'bike_id' => $last_id,
            'is_owner' =>1
        ]);

        //return $bike_info_data;
        return view('user.addbike');

    }

    public function search()
    {
        return view('search');
    }

    public function searchResult(Request $request)
    {
        $chasses_no = $request->input('search') ;
        //dd(request()->all());
$bike_info=DB::select(DB::raw
('SELECT bike_infos.brand,bike_infos.bike_model,bike_infos.bike_photo,bike_infos.present_status,user_details.fname,user_details.profile_photo 
FROM bike_infos
JOIN bike_histories
ON bike_infos.id=bike_histories.bike_id
JOIN user_details
ON bike_histories.user_id=user_details.id
WHERE bike_infos.chasses_no= :chasses_no'),array('chasses_no'=>$chasses_no,));



        //$bike_info = Bike_info::select('*')->where('chasses_no','=',$chasses_no)->get();

        return view('result',compact('bike_info',$bike_info,'chasses_no',$chasses_no));
    }

    public function APIsearchResult($chasses_no)
    {

        $bike_info=DB::select(DB::raw
        ('SELECT bike_infos.brand,bike_infos.bike_model,bike_infos.bike_photo,bike_infos.present_status,user_details.fname,user_details.profile_photo 
FROM bike_infos
JOIN bike_histories
ON bike_infos.id=bike_histories.bike_id
JOIN user_details
ON bike_histories.user_id=user_details.id
WHERE bike_infos.chasses_no= :chasses_no'),array('chasses_no'=>$chasses_no,));



        //$bike_info = Bike_info::select('*')->where('chasses_no','=',$chasses_no)->get();
        return $bike_info;

        return view('result',compact('bike_info',$bike_info,'chasses_no',$chasses_no));
    }
}