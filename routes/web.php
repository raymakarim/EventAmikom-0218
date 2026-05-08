<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EventController as EventAdminController;




Route::get('/tentang', function () {
    return '<h1>Ini adalah halaman tentang aplikasi event hub</h1>';
});

Route::get('/kontak', function () {
    return view('contact');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/bantuan', function () {
    return view('bantuan');
});

// Rute User Area
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/event/1', [EventController::class, 'show'])->name('events.show');
Route::get('/checkout', [EventController::class,'checkout'])->name('checkout');
Route::get('/my-ticket', [EventController::class, 'ticket'])->name('ticket');


// Rute Admin area
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
Route::get('/', [DashboardController::class,'index'])->name('dashboard');
Route::resource('events', EventAdminController::class);
//Route::get('/events', [EventAdminController::class,'index'])->name('events.index');
//Route::get('/events/create', [EventAdminController::class,'create'])->name('events.create');
//Route::get('/events/edit', [EventAdminController::class,'edit'])->name('events.edit');
//Route::get('/events/destroy', [EventAdminController::class,'destroy'])->name('events.destroy');
// Route::get('/transactions', [TransactionController::class,'index'])->name('transaction.index');
// Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
// dan seterusnya...
});

