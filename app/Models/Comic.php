<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    //fillable
    protected $fillable = [
        'title',
        'description',
        'series',
        'type',
        'price',
        'thumb',
        'sale_date'
    ];

}
