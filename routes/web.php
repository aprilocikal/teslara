<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

// Storefront
Route::get('/debug-ping', function() {
    return 'Laravel is alive! PHP Version: ' . phpversion();
});
Route::get('/', [ProductController::class, 'index'])->name('home');

// Admin Panel
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/store', [AdminController::class, 'store'])->name('admin.store');
    Route::delete('/destroy/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
});


