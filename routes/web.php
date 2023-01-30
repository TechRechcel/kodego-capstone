<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CreateTask;
use App\Http\Livewire\ShowTask;
use App\Http\Livewire\StoreTask;
use App\Http\Controllers\AuthController;

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

Route::get('/', CreateTask::class);
Route::get('login',[AuthController::class,'login']);
Route::get('register',[AuthController::class,'register']);
Route::get('forgot_password',[AuthController::class,'forgot_password']);