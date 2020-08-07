<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['quantity'];

    public function food()
    {
        return $this->belongsTo('App\Models\Food');
    }
}
