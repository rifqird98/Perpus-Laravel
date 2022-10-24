<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $fillable = [
        'author',
        'title',
        'city',
        'publisher',
        'cover',
        'sinopsis',
        'stock'
    ];

    protected $hidden = [];
}
