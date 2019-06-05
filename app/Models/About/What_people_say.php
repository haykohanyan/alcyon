<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Model;

class What_people_say extends Model
{
    protected $table='what_people_says';

    protected $fillable = [
        'title_am',
        'title_ru',
        'title_en',
        'article_am',
        'article_ru',
        'article_en',
        'from',
        'image'
    ];
}
