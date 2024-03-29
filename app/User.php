<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'admin','email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public  function isadmin(){
        if ($this->admin){
            return true;
        };
        return false;
    }
}
