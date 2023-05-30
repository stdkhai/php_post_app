<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/parcels', 'App\Http\Controllers\ParcelController@index')->name('parcels.index');
    Route::get('/admin/dashboard', 'App\Http\Controllers\AdminDashboardController@dashboard')->name('admin.dashboard');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/admin/parcels', [AdminController::class, 'parcels'])->name('admin.parcels');

});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

