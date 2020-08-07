<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class UserAccountController extends Controller
{
    public function getMyAccount()
    {
        $data=[
            'user'=>$user = $this->checkUserLogin()
        ];
        return view('Public.my_account',$data);
    }

    public function orderHistory()
    {
        $user = $this->checkUserLogin();
        $orders = Order::where('user_id',$user->id)->paginate(5);
        $data = [
            'user' => $user,
            'orders' => $orders
        ];
        return view('Public.my_orders', $data);
    }
}
