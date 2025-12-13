<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//home
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//customer
Route::get('customer/add', [\App\Http\Controllers\CustomerController::class, 'add'])->name('customer.add');
Route::post('customer/save', [\App\Http\Controllers\CustomerController::class, 'save'])->name('customer.save');
Route::get('customer', [\App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');

Route::get('customer/{customer}' , [\App\Http\Controllers\CustomerController::class , 'show'])->name('customer.show');
Route::post('customer/update/{customer}', [\App\Http\Controllers\CustomerController::class , 'update'])->name('customer.update');
Route::get('customer/edit/{customer}', [\App\Http\Controllers\CustomerController::class , 'edit'])->name('customer.edit');
Route::get('customer/delete/{customer}' , [\App\Http\Controllers\CustomerController::class , 'delete'])->name('customer.delete');




//user
Route::get('user/add', [\App\Http\Controllers\UserController::class, 'add'])->name('user.add');
Route::post('user/save', [\App\Http\Controllers\UserController::class, 'save'])->name('user.save');
Route::get('user', [\App\Http\Controllers\UserController::class, 'index'])->name('user.index');

Route::get('user/{user}' , [\App\Http\Controllers\UserController::class , 'show'])->name('user.show');
Route::post('user/update/{user}', [\App\Http\Controllers\UserController::class , 'update'])->name('user.update');
Route::get('user/edit/{user}', [\App\Http\Controllers\UserController::class , 'edit'])->name('user.edit');
Route::get('user/delete/{user}' , [\App\Http\Controllers\UserController::class , 'delete'])->name('user.delete');




//product
Route::get('product/add', [\App\Http\Controllers\ProductController::class, 'add'])->name('product.add');
Route::post('product/save', [\App\Http\Controllers\ProductController::class, 'save'])->name('product.save');
Route::get('product', [\App\Http\Controllers\ProductController::class, 'index'])->name('product.index');

Route::get('product/{product}' , [\App\Http\Controllers\ProductController::class , 'show'])->name('product.show');
Route::post('product/update/{product}', [\App\Http\Controllers\ProductController::class , 'update'])->name('product.update');
Route::get('product/edit/{product}', [\App\Http\Controllers\ProductController::class , 'edit'])->name('product.edit');
Route::get('product/delete/{product}', [\App\Http\Controllers\ProductController::class , 'delete'])->name('product.delete');




//address
//Route::post('address/save',[\App\Http\Controllers\AddressController::class,'save'])->name('address.save');
//Route::get('address',[\App\Http\Controllers\AddressController::class,'index'])->name('address.index');

//Route::get('address/{address}' , [\App\Http\Controllers\AddressController::class , 'show'])->name('address.show');
//Route::post('address/update/{address}', [\App\Http\Controllers\AddressController::class , 'update'])->name('address.update');
//Route::get('address/edit/{address}', [\App\Http\Controllers\AddressController::class , 'edit'])->name('address.edit');
//Route::get('address/delete/{address}', [\App\Http\Controllers\AddressController::class , 'delete'])->name('address.delete');




//brand
Route::get('brand/add', [\App\Http\Controllers\BrandController::class, 'add'] )->name('brand.add');
Route::post('brand/save', [\App\Http\Controllers\BrandController::class, 'save'] )->name('brand.save');
Route::get('brand', [\App\Http\Controllers\BrandController::class, 'index'] )->name('brand.index');

Route::get('brand/{brand}' , [\App\Http\Controllers\BrandController::class , 'show'])->name('brand.show');
Route::post('brand/update/{brand}', [\App\Http\Controllers\BrandController::class , 'update'])->name('brand.update');
Route::get('brand/delete/{brand}', [\App\Http\Controllers\BrandController::class , 'delete'])->name('brand.delete');


