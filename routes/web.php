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


Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::resource('customers', \App\Http\Controllers\CustomerController::class);
Route::resource('contracts', \App\Http\Controllers\ContractController::class);
Route::resource('users', \App\Http\Controllers\UserController::class);

Route::get('logs', [\App\Http\Controllers\LogController::class, 'index'])->name('logs.index');;
Route::get('expenses', [\App\Http\Controllers\ExpenseController::class, 'index'])->name('expenses.index');
// asset
Route::get('asset', [\App\Http\Controllers\AssetController::class, 'index'])->name('asset.index');
Route::get('asset/create', [\App\Http\Controllers\AssetController::class, 'create'])->name('asset.create');
Route::post('asset/store', [\App\Http\Controllers\AssetController::class, 'store'])->name('asset.store');
Route::get('asset/show/{id}', [\App\Http\Controllers\AssetController::class, 'show'])->name('asset.show');
Route::get('asset/edit/{id}', [\App\Http\Controllers\AssetController::class, 'edit'])->name('asset.edit');
Route::put('asset/update/{id}', [\App\Http\Controllers\AssetController::class, 'update'])->name('asset.update');
Route::delete('asset/destroy/{id}', [\App\Http\Controllers\AssetController::class, 'destroy'])->name('asset.destroy');

