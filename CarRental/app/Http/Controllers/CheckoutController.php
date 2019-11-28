<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Checkout;
use App\Notifications\ChangeReservationStatus;
use App\Notifications\NewReservation;
use Notification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{

    public function checkoutCar(Request $request, $id)
    {
        $car = Car::where('id', $id)->first();
        $categories = Category::where('id_parent', 0)->get();

        try {
            $search = [
                'dateBegin' => new Carbon($request->dateBegin),
                'dateEnd' => new Carbon($request->dateEnd),
                'timeBegin' => new Carbon($request->timeBegin),
                'timeEnd' => new Carbon($request->timeEnd),
            ];
        } catch (\Exception $e) {
        }
        $checkoutCarDetail = $this->checkoutCarDetail($search, $car);

        return view('user.checkout', ['car' => $car,
                                            'search' => $search,
                                            'checkoutDetail' =>  $checkoutCarDetail,
                                            'categories' =>$categories
                                            ]);
    }

    public function checkoutCarDetail($search, $car) {
        $totalHourRental = $search['dateBegin']->diffInHours($search['dateEnd']) + $search['timeBegin']->diffInHours($search['timeEnd']);
        if (($totalHourRental % 24) != 0){
            $totalDay = number_format($totalHourRental/24) + 1;
        } else {
            $totalDay = number_format($totalHourRental/24);
        }
        if ($totalDay == "1") {
            $totalDay = 1;
        }

        $totalPrice =  $car->price * $totalDay;
        $checkoutDetail =[
            'totalPrice' => number_format($totalPrice),
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
                'user_id_1' => $car->user->id,
                'user_id_2' => auth()->id(),
                'status_1' => 1, // pending
                'status_2' => 1, // pending
                'status_ck' => 1, // pending
                'message_1' => 'Bạn có một chuyến mới.',
                'message_2' => 'Chuyến của bạn đang chờ chủ xe duyệt.',
                'price' => (float) Str::replaceArray(',', [''], $checkoutDetail['totalPrice']),
                'trip_start' => $search['dateBegin']->toDateString() ." ". $search['timeBegin']->toTimeString(),
                'trip_end' => $search['dateEnd']->toDateString() ." ". $search['timeEnd']->toTimeString(),
            ]);

            Notification::send($car->user, new ChangeReservationStatus($checkout));
            Notification::send($checkout->user2, new ChangeReservationStatus($checkout));
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
        $categories = Category::where('id_parent', 0)->get();

        return view('user.reservation', [
                                                'checkout' => $checkout,
                                                'categories' =>$categories
                                            ]);
    }

    public function tripDepositIndex($id) {
        $checkout = Checkout::where('id', $id)->first();
        $categories = Category::where('id_parent', 0)->get();

        return view('user.reservation1',[
                                                'checkout' => $checkout,
                                                'categories' =>$categories
                                            ]);
    }

    public function tripProcessIndex($id) {
        $checkout = Checkout::where('id', $id)->first();
        $categories = Category::where('id_parent', 0)->get();

        return view('user.reservation2', [
                                                'checkout' => $checkout,
                                                'categories' =>$categories
                                            ]);
    }

    public function tripEndIndex($id) {
        $checkout = Checkout::where('id', $id)->first();
        $categories = Category::where('id_parent', 0)->get();

        return view('user.reservation3', [
                                                'checkout' => $checkout,
                                                'categories' =>$categories
                                            ]);
    }
}
