<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\LoginController;
use App\Models\addresses;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => 'Welcome']);
});

Route::get('/addresses', function () {
    return view('addresses', ['title' => 'addresses', 'data' => addresses::all()]);
})->name('addresses');

Route::get('/login', function () {
    return view('auth/login', ['title' => 'login']);
})->name('login');

Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin/dashboard', ['title' => 'dashboard', 'data' => addresses::all(),]);
    })->name('dashboard');

    Route::post('/address', [AddressController::class, 'store'])->name('address.store');
    Route::post('/address', [AddressController::class, 'store'])->name('address.store');

    Route::get('/dashboard/edit/{id}', function ($id) {
        return view('admin/dashboard', [
            'title' => 'dashboard',
            'data' => addresses::all(),
            'row' => addresses::where('id', $id)->firstOrFail(),
        ]);
    })->name('edit.index');
    Route::patch('/dashboard/edit/{id}', [AddressController::class, 'update'])->name('address.update');
    Route::delete('/dashboard/delete/{id}', [AddressController::class, 'destroy'])->name('address.destroy');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
