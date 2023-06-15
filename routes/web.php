<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListeningController;

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

Route::get('/listening',[ListeningController::class,'index']);
