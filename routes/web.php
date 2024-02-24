<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class,'index']);

Route::prefix('category')->group(function (){
    Route::get('/food-beverage',[CategoryController::class,'food']);
    Route::get('/beauty-health',[CategoryController::class,'beauty']);
    Route::get('/home-care',[CategoryController::class,'home']);
    Route::get('/baby-kid',[CategoryController::class,'baby']);
});


Route::get('users/{id}/name/{name}', [UserController::class,'index']);

Route::get('/penjualan',[PenjualanController::class,'index']);
