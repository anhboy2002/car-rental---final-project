<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'car_categories';
    protected $fillable = [
        'id',
        'id_parent',
        'name'
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'id_parent');
    }

    public function childrens()
    {
        return $this->hasMany(Category::class, 'id_parent');
    }
}
