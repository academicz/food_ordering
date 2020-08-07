<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\Food;
use App\Models\Login;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getHome()
    {
        $data = [
            'user'=>$this->checkUserLogin(),
            'items'=> Food::paginate(6),
        ];

        return view('Public.home',$data);
    }

    public function getRegistration()
    {
        $data = [
            'user'=>$this->checkUserLogin(),
        ];

        return view('Public.register',$data);
    }

    public function postRegistration(RegistrationRequest $request)
    {
        /*
         * Save user details
         */
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->home_town = $request['homeTown'];
        $user->user_type = 1;
        $user->status = 1;
        $user->save();

        /*
         * Save Login details
         */
        $login = new Login();
        $login->email = $request['email'];
        $login->password = bcrypt($request['password']);
        $login->user_id = $user->id;
        $login->user_type_id = 1;
        $login->save();

        return redirect()->route('register')->with([
            'success' => 'Registration completed successfully',
        ]);
    }

    public function getAllItems()
    {
        $items = Food::paginate(6);

        $data = [
            'items' => $items,
            'user'=>$this->checkUserLogin(),
        ];

        return view('Public.all_items', $data);
    }

    public function showItem($id)
    {
        $item = Food::find($id);

        $data = [
            'item' => $item,
            'user'=>$this->checkUserLogin(),
        ];
        return view('Public.single_item', $data);
    }

}
