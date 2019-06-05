<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Model;

class Years_of_exp extends Model
{
    protected $table='years_of_exps';

    protected $fillable = [
        'title_am',
        'title_ru',
        'title_en',
        'count'
    ];
}
