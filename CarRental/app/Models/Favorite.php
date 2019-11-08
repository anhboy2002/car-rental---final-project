<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $table = 'favorites';
    protected $fillable= [
        'id',
        'user_id',
        'car_id',
    ];

    public function car() {

        return $this->hasOne(Car::class, 'id', 'car_id');
    }
}
