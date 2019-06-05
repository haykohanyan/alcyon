<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    protected $table='texts';

    protected $fillable = [
        'title_en',
        'title_ru',
        'title_am'
    ];
}
