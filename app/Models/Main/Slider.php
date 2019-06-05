<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table='sliders';

    protected $fillable = [
        'title_en',
        'title_ru',
        'title_am',
        'article_en',
        'article_ru',
        'article_am',
        'image'
    ];
}
