<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $table = 'checkouts';

    protected $casts = [
        'price' => 'float',
    ];

    protected $fillable = [
        'id',
        'car_id',
        'user_id_1',
        'user_id_2',
        'status_1',
        'status_2',
        'trip_start',
        'trip_end',
        'price',
        'total_time_rental',
        'status_ck'
    ];

    public function car(){

        return $this->hasOne(Car::class, 'id', 'car_id');
    }

    public function user1(){

        return $this->hasOne(User::class, 'id', 'user_id_1');
    }

    public function user2(){

        return $this->hasOne(User::class, 'id', 'user_id_2');
    }

    public function totalPrice($trips){
        $totalPriceSuccess = 0;
        $totalPriceReject = 0;
        foreach($trips as $trip) {
            if($trip->status_ck == '4'){
                $totalPriceSuccess += $trip->price;
            } else {
                $totalPriceReject += $trip->price;
            }
        }

        return $toalPrice = [
                             'totalPriceSuccess' => number_format( $totalPriceSuccess),
                             'totalPriceReject' => number_format($totalPriceReject),
                             ];
    }

    public function setTotalTrip($checkout){
        $user1 = $checkout->user1;
        $user2= $checkout->user2;
        $user1->total_trip = $user1->total_trip + 1 ;
        $user2->total_trip = $user1->total_trip + 1 ;
        $user1->save();
        $user2->save();

        return true;
    }
}
