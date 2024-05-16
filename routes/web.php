<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\GeneralController;
use App\Http\Controllers\Backend\VehicleController;


Route::get('/test', function(){
    return Hash::make('test@1234'); //$2y$12$Jw8EFS6hGXYRD/e/C0JEiuV8wBnWj5TEQlhDcV45oIFDRTBeNC.cS
});

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth','verified','role:customer')->group(function () {
    Route::get('/dashboard', [GeneralController::class, '__invoke'])->name('dashboard');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth','verified','role:admin')->prefix('admin')->group(function () {
    Route::get('dashboard', [GeneralController::class, '__invoke'])->name('admin.dashboard');
    Route::resource('vehicles', VehicleController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
