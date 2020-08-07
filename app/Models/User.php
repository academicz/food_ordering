<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * @property mixed name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $id
 * @property mixed email
 * @property mixed phone
 * @property int user_type
 * @property int status
 * @property mixed $student_details
 * @property mixed $faculty_details
 * @property string home_town
 */
class User extends Model
{
    public function student_details()
    {
        return $this->hasOne('App\Models\StudentDetails', 'user_id');
    }
    public function faculty_details()
    {
        return $this->hasOne('App\Models\FacultyDetails', 'user_id');
    }
    public function login()
    {
        return $this->hasOne('App\Models\Login', 'user_id');
    }

    public function cart()
    {
        return $this->hasMany('App\Models\Cart', 'user_id');
    }

    public function order()
    {
        return $this->hasMany('App\Models\Order', 'user_id');
    }
}
