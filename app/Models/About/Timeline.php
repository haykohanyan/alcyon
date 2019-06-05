<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    protected $table='timelines';

    protected $fillable = [
        'title_am',
        'title_ru',
        'title_en',
        'year',
        'image'
    ];
}
