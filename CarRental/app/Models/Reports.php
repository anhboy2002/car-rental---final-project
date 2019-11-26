<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    protected $table = 'reports';

    public $timestamps = false;

    protected  $fillable = [
        'car_id',
        'status',
        'content'
    ];
}
