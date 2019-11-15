<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function getIndex() {
        $cars = Car::all();

        return view('admin.cars.list', ['cars' => $cars]);
    }

    public function getCategoryIndex() {
        $categories = Category::all();

        return view('admin.category', ['categories' => $categories]);
    }

    public function acceptCar($id) {
        $car = Car::where('id', $id)->first();
        $car->status = 1;
        $car->save();

        return  redirect()->route('admin.car.index');
    }

    public function rejectCar($id) {
        $car = Car::where('id', $id)->first();
        $car->status = -1;
        $car->save();

        return redirect()->route('admin.car.index');
    }
}
