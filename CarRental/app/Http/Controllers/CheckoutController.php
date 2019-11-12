<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Checkout;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{

    public function checkoutCar(Request $request, $id)
    {
        $car = Car::where('id', $id)->first();
        try {
            $search = [
                'dateBegin' => new Carbon($request->dateBegin),
                'dateEnd' => new Carbon($request->dateEnd),
                'timeBegin' => new Carbon($request->timeBegin),
                'timeEnd' => new Carbon($request->timeEnd),
            ];
        } catch (\Exception $e) {
        }
        $this->checkoutCarDetail($search, $car);
        return view('user.checkout', ['car' => $car,
                                            'search' => $search,
                                            'checkoutDetail' =>  $this->checkoutCarDetail($search, $car)
                                            ]);
    }

    public function checkoutCarDetail($search, $car) {
        $totalHourRental = $search['dateBegin']->diffInHours($search['dateEnd']) + $search['timeBegin']->diffInHours($search['timeEnd']);
        if (($totalHourRental/24) % 2 != 0){
            $totalDay = number_format($totalHourRental/24) + 1;
        } else {
            $totalDay = number_format($totalHourRental/24);
        }
        $totalPrice =  $car->price * ($totalHourRental/24);
        $checkoutDetail =[
            'totalPrice' => number_format($totalPrice, 2),
            'totalDayRental'=> $totalDay
        ];

        return $checkoutDetail;
    }

    public function bookCarAjax(Request $request, $id) {
        try {
            $search = [
                'dateBegin' => new Carbon(json_decode($request->search)->dateBegin),
                'dateEnd' => new Carbon(json_decode($request->search)->dateEnd),
                'timeBegin' => new Carbon(json_decode($request->search)->timeBegin),
                'timeEnd' => new Carbon(json_decode($request->search)->timeEnd),
            ];
        } catch (\Exception $e) {
        }

        $car = Car::where('id', $id)->first();
        if($car->status != 0) {
            $checkoutDetail =[
                'totalPrice' => $request->totalPrice,
                'totalDayRental'=> $request->totalDayRental
            ];

            $checkout = Checkout::create([
                'car_id' => $id,
                'user_id_1' => auth()->id(),
                'user_id_2' => $car->user->id,
                'status_1' => 1, // pending
                'status_2' => 1, // pending
                'status_ck' => 1, // pending
                'price' => (float) Str::replaceArray(',', [''], $checkoutDetail['totalPrice']),
                'trip_start' => $search['dateBegin']->toDateString() ." ". $search['timeBegin']->toTimeString(),
                'trip_end' => $search['dateEnd']->toDateString() ." ". $search['timeEnd']->toTimeString(),
            ]);
        } else {
            return response()->json([
                'status' => '0',
                'checkoutId' => ""
            ]);
        }

        return response()->json([
                        'status' => '1',
                        'checkoutId' => $checkout->id
                        ]);
    }

    public function tripDetailIndex(Request $request, $id) {
        $checkout = Checkout::where('id', $id)->first();

        return view('user.reservation', ['checkout' => $checkout]);
    }

    public function tripDepositIndex($id) {
        $checkout = Checkout::where('id', $id)->first();

        return view('user.reservation1', ['checkout' => $checkout]);
    }

    public function tripProcessIndex($id) {
        $checkout = Checkout::where('id', $id)->first();

        return view('user.reservation2', ['checkout' => $checkout]);
    }

    public function tripEndIndex($id) {
        $checkout = Checkout::where('id', $id)->first();

        return view('user.reservation3', ['checkout' => $checkout]);
    }
}
