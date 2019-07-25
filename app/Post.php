<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table="posts";

    public function brand()
    {
        return $this->belongsTo(Post::class);
    }
}
