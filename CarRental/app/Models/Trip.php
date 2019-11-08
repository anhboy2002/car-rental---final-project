<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $table = 'trips';
    protected $fillable = [
        'id',
        'checkout_id',
    ];

    public function checkout(){

        return $this->hasOne(Checkout::class);
    }
}
