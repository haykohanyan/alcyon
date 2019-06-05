<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Model;

class wcu_skill extends Model
{
    protected $table='wcu_skills';

    protected $fillable = [
        'title_am',
        'title_ru',
        'title_en',
        'count'
    ];
}
