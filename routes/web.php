<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdoptionController;
use App\Models\Adoption;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/adoption', function () {
    return view('adoption');
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('/dogList', function () {
//     return view('dogList', $data);
// });

Route::get('/contacs', function () {
    return view('contacs');
});

// Route::get('/add', function () {
//     return view('add');
// });

// Route::get('/dog-details', function () {
//     return view('dog-details');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/add', [AdoptionController::class, 'create']);

Route::post('/adoption/store', [AdoptionController::class, 'store']);

Route::get('/dog-details/{adoption:id}', [AdoptionController::class, 'show'])->name('dog.details');

Route::get('/dogList', [AdoptionController::class, 'showAll']);

Route::get('/adoption/edit/{id}', [AdoptionController::class, 'edit']);

// Route::put('/adoption/update/{adoption:id}', [AdoptionController::class, 'update']);

Route::get('/adoption/delete/{id}', [AdoptionController::class, 'destroy']);
Route::resource('/adoption', AdoptionController::class);
