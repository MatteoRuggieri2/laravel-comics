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

    // Prendo l'array che si trova in 'config/comics.php'
    $comics_array = config('comics');
    // dd($comics_array);

    $data = [
        'comics_array' => $comics_array,
    ];

    return view('home', $data);
})->name('home');


Route::get('/characters', function () {

    return view('characters');
})->name('characters');


Route::get('/movies', function () {

    return view('movies');
})->name('movies');


Route::get('/comic-info', function () {

    return view('comicinfo');
})->name('comicinfo');