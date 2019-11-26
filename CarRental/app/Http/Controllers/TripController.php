<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Checkout;
use App\Models\Reports;
use App\Notifications\ChangeReservationStatus;
use Notification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TripController extends Model
{
    public function index() {
        $checkouts = Checkout::where('user_id_2', auth()->id())->orderBy('created_at', 'desc')->get();
        $categories = Category::where('id_parent', 0)->get();

        return view('user.trip', [
                                        'checkouts' => $checkouts,
                                        'categories' =>$categories
                                        ]);
    }

    public function reportCar($id) {
        $checkout = Checkout::where('id', $id)->first();
        $report = Reports::create([
                    'car_id' => $checkout->car_id,
                    'status' => 0,
                    'content' => 'Chu xe chua giao xe',
        ]);

        return response('status');
    }

    public function changeStatusTrip(Request $request, $id) {
        $checkout = Checkout::where('id', $request->id)->first();
        switch ($request->status) {
            case "2" :
                $status = 2;
                $status_1 = 2;
                $status_2 = 2;
                break;

            case "0" :
                $status = 0;
                $status_1 = 0;
                $status_2 = 0;
                if ($request->status_1 == "0") {
                    $message_1 = "Chủ xe hủy chuyến";

                } elseif ($request->status_2 == "0") {
                    $message_2 = "Khách hàng hủy chuyên";
                }
                break;

            case "3" :
                $status = 3;
                $status_1 = 3;
                $status_2 = 3;
                break;

            case "5" :
                $status = 5;
                $status_1 = 5;
                $status_2 = 5;
                break;

            case "6" :
                $status = 6;

                if ($request->status_1 == "6") {
                    $message_1 = "Đã giao xe";
                    $status_1 = 6;
                    $status_2 = 7;

                } elseif ($request->status_2 == "6") {
                    $message_2 = "Đã nhận xe";
                    $status_1 = 6;
                    $status_2 = 6;
                }
                break;
            case "4" :
                $status = 4;

                if ($request->status_2 == "4") {
                    $message_1 = "Đã giao xe";
                    $status_1 = 9;
                    $status_2 = 4;

                } elseif ($request->status_1 == "4") {
                    $message_2 = "Đã nhận xe";
                    $status_1 = 4;
                    $status_2 = 4;
                }
                $checkout->setTotalTrip($checkout);
                break;
        }

        $checkout->status_ck =  $status;
        $checkout->status_1 =  $status_1;
        $checkout->status_2 =  $status_2;
        $checkout->message_1 =  $message_1;
        $checkout->message_2 =  $message_2;
        $checkout->save();
        Notification::send($checkout->user2, new ChangeReservationStatus($checkout));

        return response()->json([
            'status' => 'oke'
        ]);
    }
}
