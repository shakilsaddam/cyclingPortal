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

    public function detail()
    {
        return view('buyorsale.showdetails');
    }
}
