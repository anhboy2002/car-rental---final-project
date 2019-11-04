<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function checkoutCar($id)
    {
        $car = Car::where('id', $id)->first();

        return view('user.checkout', ['car' => $car]);
    }
}
