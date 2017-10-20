<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_detail extends Model
{
    public $timestamps = false;
    protected $fillable = ['fname','lname','email_address','password'];
}
