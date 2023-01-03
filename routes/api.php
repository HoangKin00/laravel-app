<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\InfomationController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('service/{id?}', [ServiceController::class,'index']);
Route::post('service', [ServiceController::class,'create']);
Route::put('service/{id}', [ServiceController::class,'update']);
Route::delete('service/{id}', [ServiceController::class,'delete']);

Route::get('doctor/{id?}', [DoctorController::class,'index']);
Route::post('doctor', [DoctorController::class,'create']);
Route::put('doctor/{id}', [DoctorController::class,'update']);
Route::delete('doctor/{id}', [DoctorController::class,'delete']);

Route::get('price/{id?}', [PriceController::class,'index']);
Route::post('price', [PriceController::class,'create']);
Route::put('price/{id}', [PriceController::class,'update']);
Route::delete('price/{id}', [PriceController::class,'delete']);

Route::get('client/{id?}', [ClientController::class,'index']);
Route::post('client', [ClientController::class,'create']);
Route::put('client/{id}', [ClientController::class,'update']);
Route::delete('client/{id}', [ClientController::class,'delete']);

Route::get('process/{id?}', [ProcessController::class,'index']);
Route::post('process', [ProcessController::class,'create']);
Route::put('process/{id}', [ProcessController::class,'update']);
Route::delete('process/{id}', [ProcessController::class,'delete']);

Route::get('infomation/{id?}', [InfomationController::class,'index']);
Route::post('infomation', [InfomationController::class,'create']);
Route::put('infomation/{id}', [InfomationController::class,'update']);
Route::delete('infomation/{id}', [InfomationController::class,'delete']);

