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
    $links_comics = config('comics_header_links');

    return view('homepage', compact('links_comics'));
});


Route::get('/comics', function () {
    $links_comics = config('comics_header_links');
    $comics = config('comics');



    return view('comics', compact('links_comics', 'comics'));
});
