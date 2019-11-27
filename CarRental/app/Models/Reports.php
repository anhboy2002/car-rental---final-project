<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    protected $table = 'reports';

    protected  $fillable = [
        'car_id',
        'status',
        'content'
    ];

    public function car() {

        return $this->hasOne(Car::class, 'id', 'car_id');
    }
}
