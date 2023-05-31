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
    Route::get('/parcels', [AdminParcelController::class, 'index'])->name('admin.parcels.index');
    Route::get('/parcels/create', [AdminParcelController::class, 'create'])->name('admin.parcels.create');
    Route::post('/parcels', [AdminParcelController::class, 'store'])->name('admin.parcels.store');
    Route::get('/parcels/{parcel}', [AdminParcelController::class, 'show'])->name('admin.parcels.show');
    Route::get('/parcels/{parcel}/edit', [AdminParcelController::class, 'edit'])->name('admin.parcels.edit');
    Route::post('/parcels/{parcel}', [AdminParcelController::class, 'update'])->name('admin.parcels.update');
    Route::delete('/parcels/{parcel}', [AdminParcelController::class, 'destroy'])->name('admin.parcels.destroy');
});