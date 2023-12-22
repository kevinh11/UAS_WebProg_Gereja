<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AyatController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\AnnouncementController;
use App\Models\Announcement;

Route::get('/', function () {
    $ayat = new AyatController();

    $annCtr = new AnnouncementController();
    $annCtr->read();

    $ayat->set_daily_verse();

    return view('pages.home', ['ayat'=> $ayat->get_verse(), 'announcements'=> $annCtr->announcements]);
});

Route::get('/jadwal', [EventController::class, 'index']);
Route::get('/admin-login', [AuthController::class, 'index'])->name('admin-login');;
Route::get('/admin-dashboard', [AdminController::class, 'index']);

Route::post('/login-redirect', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth'], function () {
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

    Route::get('announcements/create', [AnnouncementController::class, 'display_create_view']);
    Route::get('announcements/{id}/edit', [AnnouncementController::class, 'display_edit_view']);
    Route::post('announcements/{id}/edit/execute', [AnnouncementController::class, 'edit']);
    Route::post('announcements/create/execute', [AnnouncementController::class, 'create']);
    Route::get('announcements/{id}/delete', [AnnouncementController::class, 'delete']);
    Route::get('announcements/all', [AnnouncementController::class, 'read']);

    Route::get('/logout', [AuthController::class, 'logout']);
});


Route::get('/galeri', [GaleriController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);

Route::get('/{any}', function($any){
    return view('pages.not_found');
})->where('any', '.*');



