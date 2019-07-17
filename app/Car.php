<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AjaxCrud extends Model
{
    protected $fillable = [
     'image', 'title', 'unit_price','body'
    ];
}