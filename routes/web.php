<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\taskcontroller;
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

Route::get('/register', [taskcontroller::class,'show']);

Route::post('/register',[taskcontroller::class,'store']);

Route::get('/task/view',[taskcontroller::class,'view'])->name("task_view");

Route::get('/task/view/delete/{id}',[taskcontroller::class,'delete']);

Route::get('/task/status/{id}',[taskcontroller::class,'changeStatus'])->name('task_status');