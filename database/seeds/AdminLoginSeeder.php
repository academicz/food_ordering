<?php

use App\Models\Login;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin';
        $user->phone = '9685457895';
        $user->home_town = '';
        $user->user_type = 0;
        $user->status = 1;
        $user->save();


        /*
         * Login table
         */
        $login = new Login();
        $login->user_id = $user->id;
        $login->email = 'admin';
        $login->password = bcrypt('password');
        $login->user_type_id = $user->user_type;
        $login->save();
    }
}
