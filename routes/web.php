<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Home
Route::get('/', function () {return view('welcome');})->name('home');

//Books
Route::get('/book/all/{count?}',[BookController::class,'index'])->name('books.all');
Route::get('/book/show/{id}',[BookController::class,'show'])->name('book.show');

Route::get('/book/add',[BookController::class,'add'])->name('books.add');
Route::post('/book/store',[BookController::class,'store'])->name('books.store');

Route::get('/book/update/{id}',[BookController::class,'update'])->name('books.update');
Route::put('/book/edit/{id}',[BookController::class,'edit'])->name('books.edit');

Route::get('/book/delete/{book}',[BookController::class,'delete'])->name('books.delete');

//Categories
Route::get('categories/all',[CategoryController::class,'all'])->name('categories.all');
Route::get('categories/show/{id}',[CategoryController::class,'show'])->name('categories.show');

Route::get('categories/add',[CategoryController::class,'add'])->name('categories.add');
Route::post('caregories/store',[CategoryController::class,'store'])->name('categories.store');

Route::get('categories/update/{category}',[CategoryController::class,'update'])->name('categories.update');
Route::post('categories/edit/{category}',[CategoryController::class,'edit'])->name('categories.edit');

Route::get('categories/delete/{category}',[CategoryController::class,'destroy'])->name('categories.destroy');