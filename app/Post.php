<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}
