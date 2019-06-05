<?php

namespace App\Models\Gallery;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table='images';

    protected $fillable = [
        'image',
        'article1_am',
        'article1_ru',
        'article1_en',
        'article2_am',
        'article2_ru',
        'article2_en',
        'link'

    ];

    public function cats(){

        return $this->belongsToMany('App\Models\Gallery\CAt','image_cats');
    }
}
