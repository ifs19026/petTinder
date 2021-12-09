<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('home');
});

Route::get('/adoption', function () {
    return view('adoption');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/dogList', function () {
    return view('dogList');
});

Route::get('/contacs', function () {
    return view('contacs');
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/dog-details', function () {
    return view('dog-details');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
