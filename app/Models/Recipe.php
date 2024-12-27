<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'img',
        'description',
        'difficulty',
        'dietary_pref',
        'cuisine_type',
        'ingredient',
        'recipe_txt',
    ];
}
