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
    return view('welcome');
});

Route::get('/index', function () {
    return view('user/index');
});
Route::get('/search', function () {
    return view('user/car-list-search');
});

Route::get('/register', function () {
    return view('user/register');
});

Route::get('/list-your-car', function () {
    return view('user/list-your-car');
});
Route::get('/commonsetting', function () {
    return view('user/commonsetting');
});

Route::get('/category', function () {
    return view('user/category');
});

Route::get('/car-detail', function () {
    return view('user/car-listing-details');
});

Route::get('/checkout', function () {
    return view('user/checkout');
});
Route::get('/book', function () {
    return view('user/bookin');
});

Route::get('/mycar', function () {
    return view('user/list--car');
});
Route::get('/myfavorite', function () {
    return view('user/favorite');
});
Route::get('/profile', function () {
    return view('user/profile');
});
Route::get('/trip', function () {
    return view('user/trip');
});
