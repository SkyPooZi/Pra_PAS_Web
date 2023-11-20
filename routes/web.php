<?php

use App\Http\Controllers\DrinkController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\SnackController;
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

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/drink/all', [DrinkController::class,'index']);

Route::get('/drink/detail{drink}', [DrinkController::class,'show']);

Route::get('/food/all', [FoodController::class,'index']);

Route::get('/food/detail{food}', [FoodController::class,'show']);

Route::get('/snack/all', [SnackController::class,'index']);

Route::get('/snack/detail{snack}', [SnackController::class,'show']);
