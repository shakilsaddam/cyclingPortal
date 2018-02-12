<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_detail extends Model
{


    public $timestamps = false;
    //protected $fillable = ['fname','lname','email_address','password'];

    public function bike_info()
    {
        return $this->belongsToMany('\App\Bike_info', 'bike_histories','user_id','bike_id');

    }
}
