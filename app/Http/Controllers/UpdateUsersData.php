<?php

namespace App\Http\Controllers;

use App\Bike_info;
use Illuminate\Http\Request;

class UpdateUsersData extends Controller
{
    public function updateBikeStatus($id)
    {
        $bike_info = Bike_info::find($id);
        $bike_info->present_status='Everything OK';
        $bike_info->save();

        echo '<script language="javascript">';
        echo 'alert("Sucessfully Updated !!!")';
        echo '</script>';

        return view('user.userhome');
    }
}
