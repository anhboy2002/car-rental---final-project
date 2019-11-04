<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchCar(Request $request) {
        $cars = Car::all();
        $search = [
            'location' => $request->addressSearch,
            'dateBegin' => $request->dateBegin,
            'dateEnd' => $request->dateEnd,
            'timeBegin' => $request->timeBegin,
            'timeEnd' => $request->timeEnd,
        ];
        $categories = Category::where('id_parent', 0)->get();

        return view('user.car-list-search', [
                                            'cars' => $cars,
                                            'search' => $search,
                                            'categories' => $categories]);
    }

    public function searchOptions(Request $request) {

        if ($request->num_seat == "0") {
            $cars = Car::where([
                ['price','<=', $request->price],
                ['car_category_id', $request->brand_car],
                ['status', 0]])->get();
        } else if($request->brand_car == "0"){
            $cars = Car::where([
                ['num_seat', $request->num_seat],
                ['price','<=', $request->price],
                ['status', 0]])->get();
        } else {
            $cars = Car::where([
                ['num_seat', $request->num_seat],
                ['price','<=', $request->price],
                ['car_category_id', $request->brand_car],
                ['status', 0]])->get();
        }

        return response()->json([
            'cars' => $cars
        ]);
    }
}
