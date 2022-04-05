<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


Auth::routes();
Route::get('/',[ProductController::class,'index'])->name('product');
Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::get('/admin',[AdminController::class,'index'])->middleware('isAdmin')->name('admin');
Route::get('/cart/index',[CartController::class, 'index'])->name('cart.index');
Route::get('/cart/create',[CartController::class, 'create'])->name('cart.create');
Route::post('/cart/store',[CartController::class, 'store'])->name('cart.store');

