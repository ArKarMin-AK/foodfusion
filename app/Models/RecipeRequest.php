<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeRequest extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_email',
        'request_recipe',
        'reason',
        'difficulty',
    ];
}
