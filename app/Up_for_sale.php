<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Up_for_sale extends Model
{
    public function user_details()
    {
        return $this->belongsTo('\App\User_detail');
    }
}
