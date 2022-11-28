<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CustomerController::class, 'index']);
Route::post('/store', [CustomerController::class, 'store'])->name('store.customer');
// Route::get('/edit', [CustomerController::class, 'edit']);
Route::delete('/delete/{id}', [CustomerController::class, 'destroy'])->name('delete.customer');

//Route::resource('user', UserController::class);