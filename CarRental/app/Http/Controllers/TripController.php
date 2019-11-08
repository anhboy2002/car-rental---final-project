<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TripController extends Model
{
    public function index() {
        $checkouts = Checkout::where('user_id_1', 1)->orderBy('created_at', 'desc')->get();
        return view('user.trip', ['checkouts' => $checkouts]);
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
                    $message_1 = "Khách hàng hủy chuyên";

                } elseif ($request->status_2 == "0") {
                    $message_2 = "Chủ xe hủy chuyên";
                }
                break;
            case "3" :
                $status = 3;
                $status_1 = 3;
                $status_2 = 3;
        }
        $checkout->status_ck =  $status;
        $checkout->status_1 =  $status_1;
        $checkout->status_2 =  $status_2;
        $checkout->save();
        return response()->json([
            'status' => 'oke'
        ]);
    }
}
