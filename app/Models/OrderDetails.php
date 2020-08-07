<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    public function food()
    {
        return $this->belongsTo('App\Models\Food','food_id');
    }
}
