<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table='teams';

    protected $fillable = [
        'name_en',
        'name_ru',
        'name_am',
        'position_en',
        'position_ru',
        'position_am',
        'image'
    ];
}
