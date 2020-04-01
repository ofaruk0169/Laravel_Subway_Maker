<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub extends Model
{
    //goes back and forth between array and json
    protected $casts = [
        'salad' => 'array'
    ];
}
