<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EventController as EventAdminController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\CheckoutController;

// ==========================================
// RUTE FRONTEND / USER AREA (TIDAK DIUBAH)
// ==========================================
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

Route::get('/', [HomeController::class, 'index'])->name('home');

// PERBAIKAN: Mengubah /event/1 menjadi dinamis /event/{event}
Route::get('/event/{event}', [EventController::class, 'show'])->name('events.show'); 

Route::get('/checkout/{event}', [CheckoutController::class, 'create'])->name('checkout.create');
Route::post('/checkout/{event}', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/my-ticket', [EventController::class, 'ticket'])->name('ticket');


// ==========================================
// RUTE AUTH & ADMIN AREA
// ==========================================

// Menangkap akses sembarangan ke /login agar dilempar ke login admin
Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

// Grouping untuk URL berawalan /admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    // 1. Rute Login (Bebas Diakses tanpa perlu login dulu)
    Route::get('login', [AuthController::class, 'showLogin'])->name('login'); 
    Route::post('login', [AuthController::class, 'login'])->name('login.post'); 
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    // 2. Rute Dalam Admin (DIKUNCI OLEH MIDDLEWARE)
    Route::middleware(['auth', 'admin'])->group(function () {
        
        // Rute dashboard lama kamu (akses via /admin)
        Route::get('/', [DashboardController::class,'index'])->name('dashboard');
        // Rute dashboard modul (akses via /admin/dashboard)
        Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard.alt');

        Route::resource('events', EventAdminController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('partners', PartnerController::class);
        Route::get('transactions', [\App\Http\Controllers\Admin\TransactionController::class, 'index'])->name('transactions.index');
    });
});


Route::get('/payment/{order_id}', [\App\Http\Controllers\CheckoutController::class, 'payment'])->name('checkout.payment');

Route::get('/success/{order_id}', [\App\Http\Controllers\CheckoutController::class, 'success'])->name('checkout.success');
