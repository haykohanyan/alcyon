<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $table='results';

    protected $fillable = [
        'title_am',
        'title_ru',
        'title_en',
        'count'
    ];
}
