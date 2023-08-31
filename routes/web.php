<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\SessionController;
use App\Http\Controllers\LandingController;



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
    return view('sesi/index');
});

Route::get('/landing',[LandingController::class,'index'])
->middleware('isLogin');

Route::get('/sesi',[SessionController::class,'index'])
->middleware('isTamu');

Route::post('/sesi/login',[SessionController::class,'login'])
->middleware('isTamu');

Route::post('/sesi/create',[SessionController::class,'create'])
->middleware('isTamu');

Route::get('/sesi/logout',[SessionController::class,'logout']);
