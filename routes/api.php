<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ScategorieController;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware'=>'api',
    'namespace'=>'App\Http\Controllers',
    'prefix'=>'auth'],
    function($router){
        Route::post('/login',[AuthController::class,'login']);
        Route::post('/register',[AuthController::class,'register']);
        Route::post('/logout',[AuthController::class,'logout']);
        Route::get('/profile',[AuthController::class,'profile']);
        Route::get('/profile',[AuthController::class,'profile']);
  
        Route::get('/Customer',[CustomerController::class,'index']);

        Route::post('/Customer',[CustomerController::class,'store']);

        Route::get('/Customer/{id}',[CustomerController::class,'show']);

        Route::put('/Customer/{id}',[CustomerController::class,'update']);

        Route::delete('/Customer/{id}',[CustomerController::class,'destroy']);


        //categorie
Route::get('/Categorie',[CategorieController::class,'index']);

Route::post('/Categorie',[CategorieController::class,'store']);

Route::get('/Categorie/{id}',[CategorieController::class,'show']);

Route::put('/Categorie/{id}',[CategorieController::class,'update']);

Route::delete('/Categorie/{id}',[CategorieController::class,'destroy']);



Route::get('/Scategorie',[ScategorieController::class,'index']);

Route::post('/Scategorie',[ScategorieController::class,'store']);

Route::get('/Scategorie/{id}',[ScategorieController::class,'show']);

Route::put('/Scategorie/{id}',[ScategorieController::class,'update']);

Route::delete('/Scategorie/{id}',[ScategorieController::class,'destroy']);



Route::get('/Product',[ProductController::class,'index']);

Route::post('/Product',[ProductController::class,'store']);

Route::get('/Product/{id}',[ProductController::class,'show']);

Route::put('/Product/{id}',[ProductController::class,'update']);

Route::delete('/Product/{id}',[ProductController::class,'destroy']);


    
}

);