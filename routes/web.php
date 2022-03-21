<?php

use App\Http\Controllers\VendorController;
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

Route::get('/', function () {
    return view('welcome');
});

//index
Route::get('/index', [VendorController::class, 'index'])->name('vendors.index');
//create
Route::get('/create', [VendorController::class, 'create'])->name('vendors.create');
Route::post('/create', [VendorController::class, 'store'])->name('vendors.store');
//update
Route::get('/{id}/update', [VendorController::class, 'edit'])->name('vendors.edit');
Route::put('/update', [VendorController::class, 'update'])->name('vendors.update');
//destroy
Route::get('/{id}/delete', [VendorController::class, 'destroy'])->name('vendors.destroy');
