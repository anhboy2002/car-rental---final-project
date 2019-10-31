<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
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
}
