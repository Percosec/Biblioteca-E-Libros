<?php

use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('auth.login');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');
Route::post('/login-auth', [AuthController::class, 'login'])->name('auth.logearse');


Route::middleware('auth')->group(function(){
    Route::get('/logeado', [AuthController::class, 'logeado'])->name('auth.logeado');
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/logeado/cart',[CartController::class,'showCart'])->name('showcart');
    Route::post('/logeado/cart',[CartController::class,'addcart'])->name('addcart');
    Route::delete('/logeado/cart/{id}',[CartController::class,'deleteBookCart'])->name('deleteBookCart');
}); 

Route::middleware(['auth:admin'])->group(function(){
    Route::get('/admin',[AuthAdminController::class,'dashboard'])->name('admin');
    Route::post('/admin/logout',[AuthAdminController::class,'logout'])->name('admin.logout');
    Route::delete('/admin/{id}',[AuthAdminController::class,'destroy'])->name('admin.destroy');
    Route::get('/admin/books',[AuthAdminController::class,'showBooks'])->name('admin.books');
    Route::post('/admin/book/create',[BookController::class,'createBook'])->name('books.create');
    Route::get('/admin/book/edit/{id}',[BookController::class,'editBook'])->name('books.edit');
    Route::put('/admin/book/{id}',[BookController::class,'updateBook'])->name('books.update');
    Route::delete('/admin/book/{id}',[BookController::class,'deleteBook'])->name('books.delete');
});