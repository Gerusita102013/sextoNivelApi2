<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $timestamp=false;
    protected $fillable = [
        'marca','tipo','precio',
    ];
}
