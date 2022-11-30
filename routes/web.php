<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

// Route::get('/edit', function () {
//     return view('edit');
// });



Route::get('/', [CustomerController::class, 'index']);
Route::post('/store', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::get('/show/{id}', [CustomerController::class, 'show'])->name('customer.show');
Route::PATCH('/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::delete('/delete/{id}', [CustomerController::class, 'destroy'])->name('customer.delete');

//Route::resource('students', CustomerController::class);