<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function posts() 
    {
        return $this->hasMany(Posts::class);
    }
}
