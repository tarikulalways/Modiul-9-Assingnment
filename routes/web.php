<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProtfolioController;

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
    return view('frontent.master');
});

Route::controller(ProtfolioController::class)->group(function(){
    Route::get('/', [ProtfolioController::class,'home'])->name('home');
    Route::get('/about', [ProtfolioController::class,'about'])->name('about');
    Route::get('/protfolio', [ProtfolioController::class,'protfolio'])->name('protfolio');
    Route::get('/service', [ProtfolioController::class,'service'])->name('service');
    Route::get('/contact', [ProtfolioController::class,'contact'])->name('contact');
    Route::post('/message', [ProtfolioController::class,'message'])->name('message');
});
