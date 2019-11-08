<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\Favorite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getLogin() {

        return view('user.register');
    }

    public function postLogin(LoginUserRequest $request) {
        $login = [
            'email' => $request->emailLogin,
            'password' => $request->passwordLogin,
        ];
        if (Auth::attempt($login)) {

            return redirect()->route('index');
        } else {

            return redirect()->back()->with('status', 'Login fail!');
        }
    }

    public function postRegister(RegisterUserRequest $request) {
        $user = User::create([
            'user_name' => $request->userName,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'avatar' => '',
            'phone' => '',
            'is_admin'=> 0,
            'status' => 1
        ]);
        Auth::login($user);

        return redirect()->route('index');
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('index');
    }

    public function indexMyFavoriteCar() {
        $favorites = Favorite::where('user_id', \auth()->id())->get();

        return view('user.favorite', ['favorites' => $favorites]);
    }

    public function myFavoriteCar($id) {
        $favorite = Favorite::where([
            'user_id' => \auth()->id(),
            'car_id' => $id
        ]);

        if ($favorite->exists()) {
            $favorite->delete();
            return response()->json([
                'message' => 'Đã hủy yêu thích',
                'status' => '0',
            ]);
        }
        $favorite = Favorite::create([
            'user_id' => \auth()->id(),
            'car_id' => $id
        ]);

        return response()->json([
            'message' => 'Đã yêu thích xe',
            'status' => '1',
        ]);
    }

    public function removeFavoriteCar($id) {
        $favorite = Favorite::where([
            'user_id' => \auth()->id(),
            'car_id' => $id
        ]);
        $favorite->delete();

        return response()->json([
            'status' => '0',
        ]);
    }
}
