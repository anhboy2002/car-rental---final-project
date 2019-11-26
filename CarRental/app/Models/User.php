<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name',
        'email',
        'avatar',
        'password',
        'phone',
        'address',
        'is_admin',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function cars() {

        return $this->hasMany(Car::class, 'user_id', 'id');
    }

    public function trips() {

        return $this->hasMany(Checkout::class, 'user_id_1', 'id');
    }

    public function checkouts() {

        return $this->hasMany(Checkout::class, 'user_id_2', 'id');
    }

    public function rating($id) {
        $trips = Checkout::where(
            'user_id_1', $id

        )->get();
        $ratingUser = 0;
        foreach($trips as $trip){
            $ratingUser += $trip->car->rate;
        }
        if(count($trips) == 0) {
            $count = 1;
        } else {
            $count = count($trips);
        }
        return number_format($ratingUser/$count);
    }
}
