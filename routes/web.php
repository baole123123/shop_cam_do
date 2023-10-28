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

Route::get('/master', function () {
    return view('welcome');
});
Route::get('/add', function () {
    return view('add');
});
Route::get('/list', function () {
    return view('list');
});


Route::resource('customers', \App\Http\Controllers\CustomerController::class);
Route::resource('contracts', \App\Http\Controllers\ContractController::class);
Route::resource('users', \App\Http\Controllers\UserController::class);
Route::resource('asset', \App\Http\Controllers\AssetController::class);
Route::get('expenses', [\App\Http\Controllers\ExpenseController::class, 'index'])->name('expenses.index');