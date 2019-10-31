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
}
