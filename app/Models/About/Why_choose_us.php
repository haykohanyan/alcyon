<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Model;

class Why_choose_us extends Model
{
    protected $table='why_choose_uses';

    protected $fillable = [
        'title_en',
        'title_ru',
        'title_am',
        'article_en',
        'article_ru',
        'article_am'
    ];
}
