<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//GET Login, Home, Log out and Registration Route

Route::get('/foodfusion_login',[AuthManager::class,'get_login'])->name('login');

Route::get('/foodfusion_registration',[AuthManager::class,'get_register'])->name('registration');
Route::get('/logout',[AuthManager::class,'get_logout'])->name('log_out');

//POST Login and Registration Route
Route::post('/Login',[AuthManager::class,'post_login'])->name('login_post');
Route::post('/Registration',[AuthManager::class,'post_register'])->name('register_post');

//User Recipe Post
Route::post('/create_recipe',[RecipesController::class,'create_recipe'])->name('create_recipe');
Route::post('/create_comment/{id}',[RecipesController::class,'create_comment'])->name('comment');
Route::post('/request_recipe',[RecipesController::class,'request_recipe'])->name('request_recipe');
Route::post('/usercomment/{id}',[RecipesController::class,'create_usercomment'])->name('usercomment');

//GET Other Pages Route
Route::get('/',[AuthManager::class,'get_home'])->name('home');
Route::get('/foodfusion_AboutUs',[PageController::class,'get_about_us'])->name('about_us');
Route::get('/foodfusion_ContactUs',[PageController::class,'get_contact_us'])->name('contact_us');
Route::get('/foodfusion_collection',[PageController::class,'get_collection'])->name('collection');
Route::get('/selected_recipe/{id}',[PageController::class,'get_selected_recipes'])->name('selection');
Route::get('/community',[PageController::class,'get_community'])->name('community');
Route::get('/foodfusion_create_recipe',[PageController::class,'get_creation'])->name('creation');
Route::get('/user_recipe/{id}',[PageController::class,'get_user_recipe'])->name('user_recipe');
Route::get('/culinary_resources',[PageController::class,'get_culinary_resources'])->name('culinary_resources');
Route::get('/educational_resources',[PageController::class,'get_educational_resources'])->name('educational');
Route::view('/privacy_policy','privacy_policy')->name('privacy');
Route::get('/featured-recipes/{name}',[PageController::class,'get_featured'])->name('feature');
Route::get('/userprofile/{id}',[PageController::class,'get_userprofile'])->name('profile');
Route::post('/editprofile/{id}',[PageController::class,'edit_userprofile'])->name('edit');


//GET DOWNLOAD
Route::get('/download/{filename}',[DownloadController::class,'download_resources'])->name('download');

//Delete Recipe
Route::delete('/delete_recipe/{id}',[RecipesController::class,'delete_recipe'])->name('delete');

//Password Reset
Route::middleware('guest')->group(function(){
    Route::view('/forgot-password', 'forgot-password')->name('password.request');
    Route::post('/forgot-password', [ResetPasswordController::class,'passwordEmail'])->middleware('guest')->name('password.email');
    Route::get('/reset-password/{token}', [ResetPasswordController::class,'passwordReset'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class,'passwordUpdate'])->name('password.update');
});



