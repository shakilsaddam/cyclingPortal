<?php

namespace App\Http\Controllers;

use App\Bike_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UpdateUsersData extends Controller
{
    public function updateBikeStatus(Request $request)
    {
        $bike_id = request('bike_id');
        //$user_id = Session::get('user_id');
        $bike_status = request('bike_status');


        $bike_info = Bike_info::find($bike_id);
        $bike_info->present_status=$bike_status;
        $bike_info->save();

        echo "<script>
        alert('Bike Status Successfully Updated !!!');
        window.location.href='userhome';
        </script>";

        /*echo '<script language="javascript">';
        echo 'alert("Sucessfully Updated !!!")';
        echo '</script>';*/

        //return redirect('/userhome');
    }
    public function viewDetails(Request $request)
    {
            $bike_id = request('bike_id');

            $bike_info = Bike_info::find($bike_id);
            return view('user.viewdetails')->with('bike_info',$bike_info);
    }
}
