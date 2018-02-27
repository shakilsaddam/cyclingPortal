<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BuyOrSaleController extends Controller
{
    public function index()
    {
        $bike_info = DB::select(DB::raw
        ('SELECT * FROM up_for_sales JOIN bike_infos ON up_for_sales.bike_id=bike_infos.id')
        );

        //return $bike_info;
        return view('buyorsale.index', compact('bike_info'));
    }

    public function detail($upforsale_id)
    {
        $detail_info = DB::select(DB::raw
        ('SELECT * FROM up_for_sales S
            JOIN bike_infos B
            ON S.bike_id=B.id
            JOIN bike_histories H
            ON B.id=H.bike_id
            JOIN user_details U
            ON H.bike_id=U.id
            WHERE S.id= :upforsale_id'), array("upforsale_id"=>$upforsale_id)
        );

        /*$detail_info= DB::select(DB::raw
        ('SELECT * FROM `up_for_sales` WHERE id= :upforsale_id'),array("upforsale_id"=>$upforsale_id,)
        );*/

        //return $detail_info;
        return view('buyorsale.showdetails',compact('detail_info'));
    }

    public function upforsale()
    {
        return redirect('/userhome');
    }
}
