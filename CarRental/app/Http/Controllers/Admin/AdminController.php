<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function getLogin() {

        return view('admin.login');
    }

    public function postLogin(Request $request) {
        $login = [
            'email' => $request->emailLogin,
            'password' => $request->passwordLogin,
        ];
        if (Auth::attempt($login)) {

            return redirect()->route('admin.index');
        } else {

            return redirect()->back()->with('status', 'Login fail!');
        }
    }

    public function logout() {
        Auth::logout();

        return view('admin.login');
    }

    public function getIndex() {

        return view('admin.index');
    }
}
