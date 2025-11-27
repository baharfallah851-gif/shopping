<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('customer/add', [\App\Http\Controllers\CustomerController::class, 'add'])->name('customer.add');
Route::post('customer/save', [\App\Http\Controllers\CustomerController::class, 'save'])->name('customer.save');
Route::get('customer/list', [\App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');

Route::get('customer/{customer}' , [\App\Http\Controllers\CustomerController::class , 'show'])->name('customer.show');
Route::post('customer/update/{customer}', [\App\Http\Controllers\CustomerController::class , 'update'])->name('customer.update');
Route::get('customer/edit/{customer}', [\App\Http\Controllers\CustomerController::class , 'edit'])->name('customer.edit');
Route::get('customer/delete/{customer}' , [\App\Http\Controllers\CustomerController::class , 'delete'])->name('customer.delete');





Route::get('user/add', [\App\Http\Controllers\UserController::class, 'add'])->name('user.add');
Route::post('user/save', [\App\Http\Controllers\UserController::class, 'save'])->name('user.save');
Route::get('user/list', [\App\Http\Controllers\UserController::class, 'index'])->name('user.index');

Route::get('user/{user}' , [\App\Http\Controllers\UserController::class , 'show'])->name('user.show');
Route::post('user/update/{user}', [\App\Http\Controllers\UserController::class , 'update'])->name('user.update');
Route::get('user/edit/{user}', [\App\Http\Controllers\UserController::class , 'edit'])->name('user.edit');
Route::get('user/delete/{user}' , [\App\Http\Controllers\UserController::class , 'delete'])->name('user.delete');








