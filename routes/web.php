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


Route::prefix('admin')->group(function () {
    Route::get('/', function (){ return view('admin.index'); })->name('admin');
    Route::resource('article', \App\Http\Controllers\Admin\PostController::class);
});

Route::get('/', function () {
    return 5;
});
