<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    public function phone()
    {
        return $this->hasOne('\App\Phone');
    }
}
