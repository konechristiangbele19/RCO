<?php

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
    return view('pages.home');
});

Route::get("/about", function () {
    return view('pages.about');
});

Route::get('contact', function(){
    return view('pages.contact');
});

Route::get('/hotels', function(){
    return view('pages.hotels');
});

Route::get('/reservations', function(){
    return view('pages.reservations');
});

Route::get('/commentCaMarche', function () {
    return view('pages.commentCaMarche');
});

Route::get('/detailHotel/{id}/{nameHotel}', function ($id, $nameHotel) {

    $prix = 10000;

    return view('pages.detailsHotel', [
        'name' => $nameHotel,
        'prix' => $prix
    ]);
});
