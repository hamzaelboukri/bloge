<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', [ArticleController::class, 'index'])->name('index');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('create');
Route::post('/articles', [ArticleController::class, 'store'])->name('store');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('show');
Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('edit');
Route::put('/articles/{id}', [ArticleController::class, 'update'])->name('update');
Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->name('destroy');
Route::get('/catagory', [CategoryController::class, 'index'])->name('index');
Route::get('/catagory/create', [CategoryController::class, 'create'])->name('create');
Route::post('/catagory', [CategoryController::class, 'store'])->name('store');
Route::get('/catagory/{id}', [CategoryController::class, 'show'])->name('show');            




