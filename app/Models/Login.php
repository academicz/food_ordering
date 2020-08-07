<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

/**
 * @property int user_id
 * @property mixed email
 * @property mixed password
 * @property int user_type_id
 */
class Login extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use Authenticatable;
}
