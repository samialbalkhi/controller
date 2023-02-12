<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClintController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::controller(UsersController::class)->group(function(){

//     Route::get("users",action:"getname");
//     Route::get("users/car",action:"getuser");
//     Route::get("users/name",action:"getitms");
//     Route::get("users/sami",action:"show");
//     Route::get("users/obada",action:"name");
// });

Route::resource('clint', ClintController::class);


