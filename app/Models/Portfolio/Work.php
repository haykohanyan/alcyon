<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table='works';

    protected $fillable = [
        'image',
        'article1_am',
        'article1_ru',
        'article1_en',
        'article2_am',
        'article2_ru',
        'article2_en',
        'link'

    ];

    public function categories(){

        return $this->belongsToMany('App\Models\Portfolio\Category','work_categories');
    }
}
