<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRecipe extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_email',
        'image_path',
        'recipe_name',
        'ingredient',
        'description',
        'cooking_instruction',
    ];
}
