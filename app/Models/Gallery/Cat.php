<?php

namespace App\Models\Gallery;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table='cats';

    protected $fillable = [
        'name_am',
        'name_ru',
        'name_en'
    ];

    public function images(){

        return $this->belongsToMany('App\Models\Gallery\Image','image_cats');
    }
}
