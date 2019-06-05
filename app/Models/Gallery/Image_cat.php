<?php

namespace App\Models\Gallery;

use Illuminate\Database\Eloquent\Model;

class Image_cat extends Model
{
    protected $table='image_cats';

    protected $fillable = [
        'cat_id',
        'image_id'
    ];
}
