<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRentalRequest;
use App\Models\Car;
use App\Models\Category;
use App\Models\Favorite;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchCar(CarRentalRequest $request) {
        $search = [
            'location' => $request->addressSearch,
            'dateBegin' => $request->dateBegin,
            'dateEnd' => $request->dateEnd,
            'timeBegin' => $request->timeBegin,
            'timeEnd' => $request->timeEnd,
        ];
        $dateBegin = new Carbon($request->dateBegin . " ". $request->timeBegin );
        $dateEnd = new Carbon($request->dateEnd . " ". $request->timeEnd );

        if($request->hasCategory != '0') {
            dd("oke");
            $cars = Car::where([
                'status'=> 1,
                'car_category_id' => $request->hasCategory
            ])->get();
        } else {
            $cars = Car::where('status', 1)->get();
        }
        foreach ($cars as $key => $car){
            if($car->trips != null){
                foreach ($car->trips as $trip ) {
                    if($trip->status_ck == 0 || $trip->status_ck == 2 ) {
                        $trip_end = Carbon::createFromFormat('Y-m-d H:i:s', $trip->trip_end);
                        $trip_start = Carbon::createFromFormat('Y-m-d H:i:s', $trip->trip_start);
                        if($dateBegin->gt($trip_end)) {
                        } else if($trip_start->gt($dateBegin) && $trip_start->gt($dateEnd)){
                        } else {
                            $cars->forget($key);
                        }
                    }
                }
            }
        }
        $i = 0;
        $newCars = collect ([]);
        $photos = collect ([]);
        foreach ($cars as $key => $car){
            $newCars[$i] = $car;
            $photos[$i] = $car->photos[0];
            $i++;
        }
        $categories = Category::where('id_parent', 0)->get();
        $favorites = Favorite::where('user_id', \auth()->id())->get();
        return view('user.car-list-search', [
                                            'cars' => $newCars,
                                            'photos' => $photos,
                                            'search' => $search,
                                            'favorites' => $favorites,
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
