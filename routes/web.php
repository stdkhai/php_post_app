<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminParcelController;
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
    Route::get('/admin/parcels', [AdminController::class, 'parcels'])->name('admin.parcels');
});


// routes/web.php

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/users', [AdminUserController::class, 'index'])->name('admin.users');
    Route::get('/users/{user}', [AdminUserController::class, 'show'])->name('admin.users.show');
    Route::get('/users/{user}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/users/{user}', [AdminUserController::class, 'update'])->name('admin.users.update');
    Route::delete('/users/{user}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');
    Route::post('/users/{user}/promote', [AdminUserController::class, 'promote'])->name('admin.users.promote');
    Route::post('/users/{user}/demote', [AdminUserController::class, 'demote'])->name('admin.users.demote');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/admin/parcels', [ParcelController::class, 'index'])->name('admin.parcels.index');
    Route::get('/admin/parcels/create', [ParcelController::class, 'create'])->name('admin.parcels.create');
    Route::post('/admin/parcels', [ParcelController::class, 'store'])->name('admin.parcels.store');
    Route::get('/admin/parcels/{parcel}', [ParcelController::class, 'show'])->name('admin.parcels.show');
    Route::get('/admin/parcels/{parcel}/edit', [ParcelController::class, 'edit'])->name('admin.parcels.edit');
    Route::put('/admin/parcels/{parcel}', [ParcelController::class, 'update'])->name('admin.parcels.update');
    Route::delete('/admin/parcels/{parcel}', [ParcelController::class, 'destroy'])->name('admin.parcels.destroy');
});



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
