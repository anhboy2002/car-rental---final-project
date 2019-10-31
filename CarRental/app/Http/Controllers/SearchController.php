<?php

namespace App\Http\Controllers;

use App\Models\Car;
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
        $location = $request->addressSearch;
//        return response()->json([
//            'status' => true,
//            'cars' => $cars,
//        ]);

        return view('user.car-list-search', [
                                            'cars' => $cars,
                                            'search' => $search]);
    }
}
