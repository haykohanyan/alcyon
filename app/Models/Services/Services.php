<?php

namespace App\Models\Services;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table='services';

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
