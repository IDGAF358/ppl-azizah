<?php

use App\Http\Controllers\Owner\RawProductController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    /* Owner Route */
    // Bahan Baku
    Route::get("owner/bahan-baku", [RawProductController::class, "index"])->name("owner.raw-product.index");
    Route::get("owner/bahan-baku/tambah", [RawProductController::class, "create"])->name("owner.raw-product.create");
    Route::get("owner/bahan-baku/edit/{rawProductOwner}", [RawProductController::class, "edit"])->name("owner.raw-product.edit");
    Route::post("owner/bahan-baku/tambah", [RawProductController::class, "store"])->name("owner.raw-product.store");
    Route::put("owner/bahan-baku/edit/{rawProductOwner}", [RawProductController::class, "update"])->name("owner.raw-product.update");
    Route::delete("owner/bahan-baku/hapus/{rawProductOwner}", [RawProductController::class, "destroy"])->name("owner.raw-product.destroy");
});
