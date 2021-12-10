<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdoptionController;
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

// Route::get('/dogList', function () {
//     return view('dogList');
// });

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

Route::resource('adoption', AdoptionController::class);

Route::get('add', [AdoptionController::class, 'create']);

Route::get('/adoption/store', [AdoptionController::class, 'store']);

Route::get('/dogList', [AdoptionController::class, 'show'])->name('dogList');

Route::get('/adoption/edit/{id}', [AdoptionController::class, 'edit']);

Route::get('/adoption/update/{id}', [AdoptionController::class, 'update']);

Route::get('/adoption/delete/{id}', [AdoptionController::class, 'destroy']);

