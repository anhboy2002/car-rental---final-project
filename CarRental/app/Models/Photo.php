<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'car_photos';
    protected $fillable = [
        'id',
        'car_id',
        'feature',
    ];

    public function car(){

        return $this->belongsTo(Car::class);
    }
}
