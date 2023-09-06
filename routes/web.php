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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/url_shortner', [App\Http\Controllers\HomeController::class, 'url_shortner'])->name('url_shortner');
Route::post('/submit_url', [App\Http\Controllers\HomeController::class, 'submit_url'])->name('submit_url');
Route::get('/{shorturl}', [App\Http\Controllers\HomeController::class, 'redirecttosite'])->name('redirecttosite');
