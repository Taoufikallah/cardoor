<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{
    use Notifiable;

    protected $guard ="client";

    protected $fillable = [
        'name', 'email','password',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
