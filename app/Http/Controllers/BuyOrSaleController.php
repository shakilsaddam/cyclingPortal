<?php

namespace App\Http\Controllers;

use App\Up_for_sale;
use Illuminate\Http\Request;
use DB;

class BuyOrSaleController extends Controller
{
    public function index()
    {
        $bike_info = DB::select(DB::raw
        ('SELECT up_for_sales.id AS upforsale_id, bike_infos.bike_photo, bike_infos.bike_model, up_for_sales.posted_on, up_for_sales.total_used, up_for_sales.price, up_for_sales.is_nagotiatable, up_for_sales.is_sold FROM up_for_sales JOIN bike_infos ON up_for_sales.bike_id=bike_infos.id')
        );

       // return $bike_info;
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
            ON H.user_id=U.id
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
        $total_used = request('total_used');
        $price = request('price');
        $is_nagotiatable = request('is_nagotiatable');
        $comment = request('comment');
        $bike_id = request('bike_id');

        $upforsale_last_id = Up_for_sale::select('id')->max('id');

        Up_for_sale::insert([
            'id'=> $upforsale_last_id+1,
            'bike_id' => $bike_id,
            'posted_on' => date('Y-m-d'),
            'total_used' => $total_used,
            'price' => $price,
            'is_nagotiatable' => $is_nagotiatable,
            'comment' => $comment,
            'is_sold' => 0,
            'sold_date' => date('Y-m-d')
        ]);

        echo '<script language="javascript">';
        echo 'alert("Bike has been listed in Up For Sale !!!")';
        echo '</script>';

        //return $bike_id;
        return redirect('userhome');
    }
}
