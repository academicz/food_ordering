<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed name
 * @property mixed food_category_id
 * @property mixed unit_price
 * @property mixed quantity_per_order
 * @property int status
 * @property mixed $category
 * @property string image_path
 * @property mixed description
 */
class Food extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Models\FoodCategory', 'food_category_id');
    }

    public function review()
    {
        return $this->hasMany('App\Models\Review', 'food_id');
    }
}
