<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Eloquent - significa que vou usar ele
    protected $fillable = [
        'produto', 'quantidade', 'cor'
    ];
}
