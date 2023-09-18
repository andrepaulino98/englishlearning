<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListeningController;
use App\Http\Controllers\ReadingController;
use App\Http\Controllers\SpeakingController;

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

Route::get('/login', function(){
    return view('login');
});

Route::get('/registry', function(){
    return view('registry');
});

Route::get('/appenglish', function(){
    return view('appenglish');
});

Route::get('/appenglish/listening',[ListeningController::class,'index']);
Route::get('/appenglish/readging',[ReadingController::class,'index']);
Route::get('/appenglish/speaking',[SpeakingController::class,'index']);


