<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;

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

Route::group(['prefix' => 'admin'], function (){
    Route::get('/', [AdminController::class, 'index'])->name('home');

    Route::group(['prefix' => 'service'], function (){
        Route::get('/', [ServiceController::class, 'index'])->name('admin.service');
        Route::get('service/{id?}', [ServiceController::class,'index']);
        Route::post('service', [ServiceController::class,'create']);
        Route::put('service/{id}', [ServiceController::class,'update']);
        Route::delete('service/{id}', [ServiceController::class,'delete']);
    });
});
