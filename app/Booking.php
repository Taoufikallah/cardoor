<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table="reserves";

    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function posts() 
    {
        return $this->belongsTo(Post::class);
    }
}
