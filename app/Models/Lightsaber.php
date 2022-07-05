<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lightsaber extends Model
{
    protected $table = 'lightsabers';
    protected $fillable = [
        'name',
        'slug',
        'thumb',
        'qty',
        'price'
    ];
}
