<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';
    protected $fillable = [
        'car_id',
        'user_id',
        'rate',
        'comment'
    ];
    public function user(){

        return $this->belongsTo(User::class);
    }
    public function car(){

        return $this->hasOne(Car::class, 'car_id', 'id');
    }

    public function ratingCar($id){
        $car = Car::where('id', $id)->first();
        $pointRating = (double) Feedback::where('car_id', $id)->avg('rate');
        $car->rate = $pointRating;
        $car->save();

        return $pointRating;
    }
}
