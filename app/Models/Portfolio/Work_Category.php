<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Model;

class Work_Category extends Model
{
    protected $table='work_categories';

    protected $fillable = [
        'category_id',
        'work_id'
    ];

}
