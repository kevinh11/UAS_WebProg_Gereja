<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;


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
    return view('pages.home');
});

Route::get('/jadwal', [EventController::class, 'index']);
Route::get('/admin-login', [AuthController::class, 'index']);
Route::get('/admin-dashboard', [AdminController::class, 'index']);

Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/login-redirect', [AuthController::class, 'login']);

Route::get('events/create', [EventController::class,'display_create_view']);
Route::post('events/create/execute', [EventController::class,'create']);


Route::get('/{any}', function($any){
    redirect('/');
})->where('any', '.*');



