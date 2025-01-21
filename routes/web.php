<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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


Route::get('/',[HomeController::class,'index']);

Route::get('/dashboard',[HomeController::class,'redirect']);

Route::middleware(['auth:sanctum', 'verified'])->get('/
        dashboard',function () {
        return view('dashboard');
    })->name('dashboard');

Route::get('/add_item_view',[AdminController::class,'addview']);
Route::post('/upload_item',[AdminController::class,'upload']);

Route::get('/showitem',[AdminController::class,'showitem']);
Route::get('/updateitem/{id}',[AdminController::class,'updateitem']);
Route::post('/edititem/{id}',[AdminController::class,'edititem']);
Route::get('/deleteitem/{id}',[AdminController::class,'deleteitem']);

Route::post('/appointment',[HomeController::class,'appointment']);
Route::get('/showappointment',[AdminController::class,'showappointment']);
Route::get('/diterima/{id}',[AdminController::class,'diterima']);
Route::get('/ditolak/{id}',[AdminController::class,'ditolak']);

