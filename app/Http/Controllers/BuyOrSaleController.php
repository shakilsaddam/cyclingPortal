<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyOrSaleController extends Controller
{
    public function index()
    {
        return view('buyorsale.index');
    }

    public function detail()
    {
        return view('buyorsale.showdetails');
    }
}
