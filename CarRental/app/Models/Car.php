<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';
    protected $fillable = [
        'id',
        'user_id',
        'car_category_id',
        'num_seat',
        'year',
        'name',
        'description',
        'rate',
        'total_trip',
        'price',
        'fuel_type',
        'movement',
        'status',
        'plate_number',
        'lat',
        'long',
        'location_name',
        'date_available_begin',
        'featured',
    ];

    public function photos(){

        return $this->hasMany(Photo::class);
    }

    public function category(){

        return $this->belongsTo(Category::class, 'car_category_id', 'id');
    }

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function feedbacks(){

        return $this->hasMany(Feedback::class);
    }

    public function trips(){

        return $this->hasMany(Checkout::class, 'car_id', 'id');
    }
}
