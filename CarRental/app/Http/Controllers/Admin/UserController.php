<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getIndex() {
        $user = User::all();

        return view('admin.users.list', ['users' => $user]);
    }
    public function deleteUser($id) {
        $user = User::where('id', $id)->first();
        foreach ($user->cars as $car) {
            $car->photos()->delete();
            $car->delete();
        }
        $user->trip()->delete();
        $user->delete();

        return redirect()->route('admin.user.index');
    }
}
