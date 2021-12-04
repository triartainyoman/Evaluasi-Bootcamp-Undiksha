<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class, 'index'])->name('produkList');
Route::get('/create', [ProductController::class, 'create'])->name('produkCreate');
Route::post('/', [ProductController::class, 'store'])->name('produkStore');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('produkEdit');
Route::put('/edit/{id}', [ProductController::class, 'update'])->name('produkUpdate');
Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('produkDelete');
