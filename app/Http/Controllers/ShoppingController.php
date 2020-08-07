<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Review;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function addToCart(Request $request)
    {
        $user = $this->checkUserLogin();

        $cart = Cart::firstOrNew([
            'food_id' => $request['product_id'],
            'user_id' => $user->id
        ]);
        $cart->quantity = $request['quantity'];
        $cart->food_id = $request['product_id'];
        $cart->user_id = $user->id;
        $cart->save();

        return redirect()->route('showCart');
    }

    public function showCart()
    {
        $data = [
            'user' => $this->checkUserLogin(),
        ];

        return view('Public.cart', $data);
    }

    public function showCheckout()
    {
        $data = [
            'user' => $this->checkUserLogin(),
        ];

        return view('Public.checkout', $data);
    }

    public function postCheckout(CheckoutRequest $request)
    {
        session()->put('checkout', $request->toArray());
        return redirect()->route('getPayment');
    }

    public function getPayment()
    {
        $data = [
            'user' => $this->checkUserLogin(),
        ];

        return view('Public.payment', $data);
    }

    public function placeOrder()
    {
        $carts = $this->checkUserLogin()->cart;
        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart->food->unit_price * $cart->quantity;
        }
        $data = [
            'total' => $total
        ];
        return view('Public.bank', $data);
    }

    public function comptelePayment(Request $request)
    {
        $user = $this->checkUserLogin();
        if ($request['otp'] == 123456) {
            $request = session()->pull('checkout');

            $order = new Order();
            $order->user_id = $user->id;
            $order->address = $request['address'];
            $order->city = $request['city'];
            $order->landmark = $request['landmark'];
            $order->pin = $request['pin'];
            $order->status = 1;
            $order->save();

            foreach ($user->cart as $cart) {
                $orderDetails = new OrderDetails();
                $orderDetails->order_id = $order->id;
                $orderDetails->food_id = $cart->food_id;
                $orderDetails->quantity = $cart->quantity;
                $orderDetails->save();
            }
            Cart::where('user_id', $user->id)->delete();

            $data = [
                'user' => $user,
            ];
        }
        return view('Public.order_details', $data);
    }

    public function cancelOrder(Request $request)
    {
        $order = Order::find($request['id']);
        $order->status = -1;
        $order->save();

        return redirect()->route('orderHistory')->with(['success' => 'Your Order has been cancelled successfully']);
    }

    public function postReview(Request $request)
    {
        $request = $request->validate([
            'review' => 'required',
            'star' => 'required',
            'item' => 'required'
        ]);

        $user = $this->checkUserLogin();
        $review = new Review();
        $review->user_id = $user->id;
        $review->food_id = $request['item'];
        $review->review = $request['review'];
        $review->star = $request['star'];
        $review->save();

        return redirect()->route('showItem',['id'=>$request['item']]);
    }
}
