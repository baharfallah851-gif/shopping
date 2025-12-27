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

Route::post('customer/update/{customer}', [\App\Http\Controllers\CustomerController::class , 'update'])->name('customer.update');
Route::get('customer/edit/{customer}', [\App\Http\Controllers\CustomerController::class , 'edit'])->name('customer.edit');
Route::get('customer/delete/{customer}' , [\App\Http\Controllers\CustomerController::class , 'delete'])->name('customer.delete');




//user
Route::get('user/add', [\App\Http\Controllers\UserController::class, 'add'])->name('user.add');
Route::post('user/save', [\App\Http\Controllers\UserController::class, 'save'])->name('user.save');
Route::get('user', [\App\Http\Controllers\UserController::class, 'index'])->name('user.index');

Route::post('user/update/{user}', [\App\Http\Controllers\UserController::class , 'update'])->name('user.update');
Route::get('user/edit/{user}', [\App\Http\Controllers\UserController::class , 'edit'])->name('user.edit');
Route::get('user/delete/{user}' , [\App\Http\Controllers\UserController::class , 'delete'])->name('user.delete');




//product
Route::get('product/add', [\App\Http\Controllers\ProductController::class, 'add'])->name('product.add');
Route::post('product/save', [\App\Http\Controllers\ProductController::class, 'save'])->name('product.save');
Route::get('product', [\App\Http\Controllers\ProductController::class, 'index'])->name('product.index');

Route::post('product/update/{product}', [\App\Http\Controllers\ProductController::class , 'update'])->name('product.update');
Route::get('product/edit/{product}', [\App\Http\Controllers\ProductController::class , 'edit'])->name('product.edit');
Route::get('product/delete/{product}', [\App\Http\Controllers\ProductController::class , 'delete'])->name('product.delete');




//brand
Route::get('brand/add', [\App\Http\Controllers\BrandController::class, 'add'] )->name('brand.add');
Route::post('brand/save', [\App\Http\Controllers\BrandController::class, 'save'] )->name('brand.save');
Route::get('brand', [\App\Http\Controllers\BrandController::class, 'index'] )->name('brand.index');

Route::get('brand/{brand}' , [\App\Http\Controllers\BrandController::class , 'edit'])->name('brand.edit');
Route::post('brand/update/{brand}', [\App\Http\Controllers\BrandController::class , 'update'])->name('brand.update');
Route::get('brand/delete/{brand}', [\App\Http\Controllers\BrandController::class , 'delete'])->name('brand.delete');




//ticket
Route::get('ticket/add',[\App\Http\Controllers\TicketController::class, 'add'])->name('ticket.add');
Route::post('ticket/save',[\App\Http\Controllers\TicketController::class, 'save'])->name('ticket.save');
Route::get('ticket', [\App\Http\Controllers\TicketController::class, 'index'])->name('ticket.index');

Route::get('ticket/{ticket}' , [\App\Http\Controllers\TicketController::class , 'edit'])->name('ticket.edit');
Route::post('ticket/update/{ticket}', [\App\Http\Controllers\TicketController::class , 'update'])->name('ticket.update');
Route::get('ticket/delete/{ticket}', [\App\Http\Controllers\TicketController::class , 'delete'])->name('ticket.delete');




//type
Route::get('type/add',[\App\Http\Controllers\TypeController::class, 'add'])->name('type.add');
Route::post('type/save',[\App\Http\Controllers\TypeController::class, 'save'])->name('type.save');
Route::get('type', [\App\Http\Controllers\TypeController::class, 'index'])->name('type.index');

Route::get('type/{type}' , [\App\Http\Controllers\TypeController::class , 'edit'])->name('type.edit');
Route::post('type/update/{type}', [\App\Http\Controllers\TypeController::class , 'update'])->name('type.update');
Route::get('type/delete/{type}', [\App\Http\Controllers\TypeController::class , 'delete'])->name('type.delete');




//category
Route::get('category/add',[\App\Http\Controllers\CategoryController::class, 'add'])->name('category.add');
Route::post('category/save',[\App\Http\Controllers\CategoryController::class, 'save'])->name('category.save');
Route::get('category', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');

Route::get('category/{category}' , [\App\Http\Controllers\CategoryController::class , 'edit'])->name('category.edit');
Route::post('category/update/{category}', [\App\Http\Controllers\CategoryController::class , 'update'])->name('category.update');
Route::get('category/delete/{category}', [\App\Http\Controllers\CategoryController::class , 'delete'])->name('category.delete');




//address
Route::get('address/add/{customer}',[\App\Http\Controllers\AddressController::class, 'add'])->name('address.add');
Route::post('address/save/{customer}',[\App\Http\Controllers\AddressController::class, 'save'])->name('address.save');
Route::get('address/{customer}', [\App\Http\Controllers\AddressController::class, 'index'])->name('address.index');

Route::get('address/{customer}/{address}' , [\App\Http\Controllers\AddressController::class , 'edit'])->name('address.edit');
Route::post('address/update/{address}', [\App\Http\Controllers\AddressController::class , 'update'])->name('address.update');
Route::delete('address/delete/{address}', [\App\Http\Controllers\AddressController::class , 'delete'])->name('address.delete');




//message
Route::get('message/add/{ticket}',[\App\Http\Controllers\MessageController::class, 'add'])->name('message.add');
Route::post('message/save/{ticket}',[\App\Http\Controllers\MessageController::class, 'save'])->name('message.save');
Route::get('message/{ticket}', [\App\Http\Controllers\MessageController::class, 'index'])->name('message.index');





//login
Route::get('login',[\App\Http\Controllers\LoginController::class, 'login_form'])->name('login.form');
Route::post('login',[\App\Http\Controllers\LoginController::class, 'login'])->name('login.save');
