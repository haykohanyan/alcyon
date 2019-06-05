<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Model;

class Our_clients extends Model
{
    protected $table='our_clients';

    protected $fillable = [
        'link',
        'image'
    ];
}
