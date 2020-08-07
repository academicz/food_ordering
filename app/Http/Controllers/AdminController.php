<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddFoodRequest;
use App\Models\Food;
use App\Models\FoodCategory;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function getHome()
    {
        return view('Admin.home');
    }

    /**
     * display add food page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addFoodItem()
    {
        $data = [
            'categories' => FoodCategory::all(),
        ];

        return view('Admin.add_food', $data);
    }

    public function postFoodItem(AddFoodRequest $request)
    {
        /*
         * Image upload
         */
        $file = $request->file('image');
        $extnsion = $file->guessClientExtension();
        $name = "item-" . rand(1000000, 9999999) . "." . $extnsion;
        $destinationPath = 'uploads/products';
        $file->move($destinationPath, $name);

        $food = new Food();
        $food->name = $request['name'];
        $food->food_category_id = $request['category'];
        $food->unit_price = $request['price'];
        $food->quantity_per_order = $request['quantity'];
        $food->image_path = $destinationPath . '/' . $name;
        $food->status = 1;
        $food->description = $request['description'];
        $food->save();

        return redirect()->route('addFood')->with([
            'success' => 'Item added successfully',
        ]);
    }

    public function todaysOrders()
    {
        $orders = Order::whereDate('created_at', Carbon::now()->format('Y-m-d'))->paginate(10);

        $data = [
            'orders' => $orders
        ];
        return view('Admin.todays_orders', $data);
    }

    public function updateOrderDeliveryStatus(Request $request)
    {
        $order = Order::find($request['id']);
        $order->status = 2;
        $order->save();

        return redirect()->route('todaysOrders')->with(['success' => 'Your Order status has been updated']);
    }

    public function addFoodCategory()
    {
        return view('Admin.add_food_category');
    }

    public function postFoodCategory(Request $request)
    {
        $request = $request->validate([
            'categoryName' => 'required'
        ]);
        $category = new FoodCategory();
        $category->category_name = $request['categoryName'];
        $category->save();
        return redirect()->route('addFoodCategory')->with(['success' => 'Food category added']);
    }

    public function getAllOrders()
    {
        $orders = Order::paginate(10);
        return view('Admin.all_orders', ['orders' => $orders]);
    }
}