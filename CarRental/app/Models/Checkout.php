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
}
