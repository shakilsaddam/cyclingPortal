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

    //Checking if session has data or not. It will return eiter true or false.
    public function in_session()
    {
        $user_id = Session::get('user_id');
        if(!empty($user_id))
        {
            return true;
        }else
        {
            return false;
        }

    }

    public function fetchBikeInfo()
    {
        //If session has no data then redirect to /userlogin page with a session variable login_failed_message.
        //Else return user.userhome page with some data.
        if($this->in_session()==false)
        {
            //$user_id = Session::get('user_id');
            echo '<script language="javascript">';
            echo 'alert("Please Login First !!!")';
            echo '</script>';

            session([
                'login_failed_message' => "Please Login First"
            ]);

            return redirect('userlogin');

        } else {
            $user_id = Session::get('user_id');

            //$bikes = DB::table('bike_info')->where('id','=','1')->get();
            $bikes = DB::select(DB::raw
            ('select bike_infos.id,bike_infos.brand,bike_infos.bike_model,bike_infos.chasses_no,bike_infos.bike_photo,bike_infos.present_status
            FROM bike_infos
            JOIN bike_histories
            ON bike_infos.id=bike_histories.bike_id
            JOIN user_details
            ON bike_histories.user_id=user_details.id
            WHERE user_details.id= :user_id'), array(
                    'user_id' => $user_id,)
            );

            $personal_info = User_detail::where('id', '=', $user_id)->get();

            //return $personal_info;

            //return $bikes;
            return view('user.userhome', compact('bikes', 'personal_info'));
            //return view('user.userhome')->with('bikes',$bikes,'personal_info',$personal_info);
        }
    }

    public function addNewBike()
    {
        //Session Validation.
        if($this->in_session()==false)
        {
            session([
                'login_failed_message' => "Please Login First"
            ]);
            return redirect('userlogin');
        }else
        {
            return view('user.addbike');
        }
    }

    public function addBikeStore()
    {
        //dd(request()->all());

        $chasses_no = request('chasses_no');
        $is_bike_exists = Bike_info::where('chasses_no',$chasses_no)->get();

        if(count($is_bike_exists)>=1)
        {
            echo '<script language="javascript">';
            echo 'alert("Bike Already Exist, Try Another !!!")';
            echo '</script>';

            return view('user.addbike');
        }else
        {
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

            $last_id = Bike_info::select('id')->max('id');

            Bike_history::insert([
                'user_id' => Session::get('user_id'),
                'bike_id' => $last_id,
                'is_owner' =>1
            ]);

            echo '<script language="javascript">';
            echo 'alert("Sucessfully Inserted !!!")';
            echo '</script>';

            //return $bike_info_data;
            return view('user.addbike');
        }

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