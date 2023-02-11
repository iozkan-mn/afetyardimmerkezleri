<?php

use App\Http\Controllers\StorageController;
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
])->prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(StorageController::class)->prefix('storage')->group(function (){
        Route::get('new-storage', 'create')->name('new-storage');
        Route::get('{storage}', 'edit')->name('edit-storage');
        Route::post('new-storage', 'store');
    });
});

Route::get("/", [\App\Http\Controllers\StorageController::class, 'index']);
Route::get("/{storage}", [\App\Http\Controllers\StorageController::class, 'show']);
