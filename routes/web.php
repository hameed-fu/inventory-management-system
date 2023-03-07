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

Route::get('items', [App\Http\Controllers\ItemController::class,'index'])->name('items');

 

Route::get('/users', function () {
    return view('backend.users.index');
})->name('users');

Route::get('/sales', function () {
    return view('backend.sales.index');
})->name('sales');

Route::get('/purchases', function () {
    return view('backend.purchases.index');
})->name('purchases');


