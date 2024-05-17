<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\GeneralController;
use App\Http\Controllers\Backend\VehicleController;

//Test Routes

Route::get('/test', function(){
    return Hash::make('test@1234'); //$2y$12$g/YZ3t5MbgyRSo3I/tNOm.gD5FJDPMnfcU3AVq7iTK/IPOUEHw/vq
});

Route::get('/tyres', function(){
    return view('dashboard.admin.tyres');
});

Route::get('/brands', function(){
    return view('dashboard.admin.brands');
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
//    Route::resource('vehicles', VehicleController::class);

    Route::resource('vehicles', VehicleController::class)->names([
        'index' => 'vehicles.index',
        'create' => 'vehicles.create',
//        'store' => 'vehicles.store',
        'show' => 'vehicles.show',
        'edit' => 'vehicles.edit',
//        'update' => 'vehicles.update',
        'destroy' => 'vehicles.destroy'
    ]);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
