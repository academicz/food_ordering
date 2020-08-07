<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function order_details()
    {
        return $this->hasMany('App\Models\OrderDetails','order_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
