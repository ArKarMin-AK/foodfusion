<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\UserRecipe;
use App\Models\UserRecipeComment;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    //GET ABOUT_US PAGE
    function get_about_us(Request $request){
        return view('about_us');
    }
    //GET CONTACT_US PAGE
    function get_contact_us(Request $request){
        return view('contact_us');
    }
    //GET RECIPES_COLLECTION PAGE
    function get_collection(Request $request){
        //get seleted item from recipes
        $recipes = DB::select('select distinct cuisine_type from recipes');
        $dietary_p = DB::select('select distinct dietary_pref from recipes');
        $difficulty = DB::select('select distinct difficulty from recipes');
        $allrecipe = Recipe::all();

        $selected_cuisine = $request->input('cuisine_type');
        $selected = Recipe::where('cuisine_type',$selected_cuisine)->get();

        $selected_dp = $request->input('dietary_p');
        $dp = Recipe::where('dietary_pref',$selected_dp)->get();

        $selected_diff = $request->input('difficulty');
        $diff = Recipe::where('difficulty',$selected_diff)->get();
       
        return view('recipes_collection',compact('allrecipe','recipes','selected','selected_cuisine','dietary_p','selected_dp','dp','difficulty','selected_diff','diff'));        
    }
    function get_selected_recipes($id){
        $selection = Recipe::where('id',$id)->get();
        return view('selected_recipes',compact('selection'));
    }
    //GET COMMUNITY PAGE
    function get_community(Request $request){
        $user_recipes = UserRecipe::all();
        return view('community',compact('user_recipes'));
    }
    //GET CREATE RECIPE
    function get_creation(Request $request){
        return view('create_recipe');
    }
    //GET USER RECIPE
    function get_user_recipe(Request $request,$id){
        $user_recipe = UserRecipe::where('id',$id)->get();
        $comments = UserRecipeComment::all();
        return view('selected_userrecipe',compact('user_recipe','comments'));        
    }
    //GET CULINARY RESOURCES PAGE
    function get_culinary_resources(){
        return view('culinary_resources');
    }
    //GET EDUCATIONAL RESOURCES
    function get_educational_resources(){
        return view('educational_resources');
    }
    //Get Featured Recipes
    function get_featured($name){
        $feature = Recipe::where('name',$name)->get();
        return view('featured_recipes',compact('feature'));
    }
    //GET User Profile
    function get_userprofile($id){
        $user = User::where('id',$id)->get();
        return view('user_profile',compact('user'));
    }
    //POST USER PROFILE
    function edit_userprofile(Request $request,$id){
        $request->validate([
            'First_Name'=>'string',
            'Last_Name'=>'string',
            'password'=>'min:8|string'
        ]);
        
        $user_data['First_Name']=$request->First_Name;
        $user_data['Last_Name']=$request->Last_Name;
        $user_data['password']=Hash::make($request->password);
        $user = User::findOrFail($id);
        $user->update($user_data);
        return redirect(route('profile',$id))->with('success','Edit Successfully');
    }

}
