<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Model;

class Our_partners extends Model
{
    protected $table='our_partners';

    protected $fillable = [
        'link',
        'image'
    ];
}
