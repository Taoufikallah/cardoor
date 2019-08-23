<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table="reserves";

    public function posts() 
    {
        return $this->hasMany(Post::class);
    }
}
