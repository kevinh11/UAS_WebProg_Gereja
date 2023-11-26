<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AboutController;

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
Route::get('events/{id}/edit', [EventController::class, 'display_edit_view']);
Route::post('events/{id}/edit/execute', [EventController::class,'edit']);
Route::post('events/create/execute', [EventController::class,'create']);
Route::get('events/{id}/delete', [EventController::class,'delete']);

Route::get('images/add', [ImageController::class, 'display_create_view']);
Route::get('images/{id}/edit', [ImageController::class, 'display_edit_view']);
Route::post('images/{id}/edit/execute', [ImageController::class,'edit']);
Route::post('images/add/execute', [ImageController::class,'create']);
Route::get('images/{id}/delete', [ImageController::class,'delete']);

Route::get('/about', [AboutController::class, 'index']);



Route::get('/{any}', function($any){
    return view('pages.not_found');
})->where('any', '.*');



