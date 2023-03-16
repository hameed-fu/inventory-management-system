<?php

use Illuminate\Support\Facades\Route;

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
    return view('backend.dashboard');
});




// 


Route::get('categories', [App\Http\Controllers\CategoryController::class,'index'])->name('categories');
Route::post('categories/store', [App\Http\Controllers\CategoryController::class,'store'])->name('categories.add');
Route::get('categories/delete/{id}', [App\Http\Controllers\CategoryController::class,'delete'])->name('categories.delete');

Route::get('items', [App\Http\Controllers\ItemController::class,'index'])->name('items');
Route::post('items/store',[App\Http\Controllers\ItemController::class,'store'])->name('items.add');
Route::get('items/delete/{id}', [App\Http\Controllers\ItemController::class,'delete'])->name('items.delete');







Route::get('users', [App\Http\Controllers\ItemController::class,'index'])->name('users');

Route::get('sales', [App\Http\Controllers\ItemController::class,'index'])->name('Sales');

Route::get('purchases', [App\Http\Controllers\ItemController::class,'index'])->name('purchases');

 


