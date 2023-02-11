<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/{storage}', function () {
        return view('dashboard');
    })->name('storage-show');

    Route::get('/new-storage', function () {
        return view('dashboard');
    })->name('new-storage');
});

Route::get("/afet-yardim-merkezleri", [\App\Http\Controllers\StorageController::class, 'index']);
Route::get("/{slug}", [\App\Http\Controllers\StorageController::class, 'show']);

