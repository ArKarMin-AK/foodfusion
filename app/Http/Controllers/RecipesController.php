<?php

namespace App\Http\Controllers;

use App\Models\RecipeComment;
use App\Models\RecipeRequest;
use App\Models\UserRecipe;
use App\Models\UserRecipeComment;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    //create recipes function
    function create_recipe(Request $request){
        $request->validate([
            'recipe_name'=>'required|string',
            'image_path'=>'nullable|mimes:png,jpg,jpeg,webp',
            'ingredient'=>'required|string',
            'description'=>'required|string',
            'cooking_instruction'=>'required|string',
        ]);
        $path = NULL;
        $filename = NULL;
        if($request->has('image_path')){
            $file = $request->file('image_path');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'images/recipes/';
            $file->move($path,$filename);
        }
        else{
            $path = 'images/recipes/';
            $filename = 'foodfusion_img.png';
        }
        UserRecipe::create([
            'user_email'=>$request->user_email,
            'recipe_name'=>$request->recipe_name,
            'image_path'=>$path.$filename,
            'ingredient'=>$request->ingredient,
            'description'=>$request->description,
            'cooking_instruction'=>$request->cooking_instruction,
        ]);
        return redirect(route('creation'))->with('success','User Recipe Created');
    }
    //create comment on recipes
    function create_comment(Request $request,$id){
        $request->validate([
            'recipe_id'=>'required|string',
            'user_email'=>'required|string',
            'comment'=>'required|string',
        ]);
        RecipeComment::create([
            'recipe_id'=>$request->recipe_id,
            'user_email'=>$request->user_email,
            'comment'=>$request->comment,
        ]);
        return redirect(route('selection',$id))->with('success','Your message has been delivered. Thank you for your feedback');
    }
    //create recipe request
    function request_recipe(Request $request){
        $request->validate([
            'user_email'=>'required|string',
            'request_recipe'=>'required|string',
            'reason'=>'nullable|string',
            'difficulty'=>'required|string',
        ]);
        RecipeRequest::create([
            'user_email'=>$request->user_email,
            'request_recipe'=>$request->request_recipe,
            'reason'=>$request->reason,
            'difficulty'=>$request->difficulty,
        ]);
        return redirect(route('contact_us'))->with('success','Thank you for your submission. Your Request has been delivered');
    }
    //Delete Recipe
    function delete_recipe($id){
        $user_recipe = UserRecipe::findOrFail($id);
        $user_recipe->delete();
        return redirect()->back()->with('success', 'User deleted successfully.');
        
    }
    //create comment on user's recipes
    function create_usercomment(Request $request,$id){
        $request->validate([
            'recipe_id'=>'required|string',
            'user_email'=>'required|string',
            'comment'=>'required|string',
        ]);
        UserRecipeComment::create([
            'recipe_id'=>$request->recipe_id,
            'user_email'=>$request->user_email,
            'comment'=>$request->comment,
        ]);
        
        return redirect(route('user_recipe',$id))->with('success','You have commented');
    }
    
}
