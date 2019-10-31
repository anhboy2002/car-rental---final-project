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
Route::get('/login', [
    'as' => 'getLogin',
    'uses' => 'UserController@getLogin',
]);

Route::post('/post-login', [
    'as' => 'postLogin',
    'uses' => 'UserController@postLogin',
]);

Route::post('/post-register', [
    'as' => 'postRegister',
    'uses' => 'UserController@postRegister',
]);

Route::get('/logout', [
    'as' => 'logout',
    'uses' => 'UserController@logout',
]);

Route::get('/index', [
    'as' => 'index',
    'uses' => 'CarRentalController@index',
]);

Route::get('/car-register', [
    'as' => 'carRegister',
    'uses' => 'CarController@getCreateCar',
]);

Route::get('/getCategoryChildren/{id}', [
    'as' => 'getCategoryChildren',
    'uses' => 'CarController@getCategoryChildren',
]);

Route::post('/post-car-register', [
    'as' => 'postCarRegister',
    'uses' => 'CarController@createCar',
]);

Route::get('/my-car', [
    'as' => 'myCar',
    'uses' => 'CarController@getMyCar',
]);

Route::post('/search-post', [
    'as' => 'searchCar',
    'uses' => 'SearchController@searchCar',
]);

Route::get('/search', function () {
    return view('user/car-list-search');
});

Route::get('/{id}', [
    'as' => 'carDetail',
    'uses' => 'CarController@carSingle',
]);

Route::get('/car/{id}', [
    'as' => 'car.carDetail',
    'uses' => 'CarController@carSingle',
]);

Route::post('/feedback/{id}/{point}', [
    'as' => 'feedback',
    'uses' => 'CarController@feedback',
]);






Route::get('/', function () {
    return view('welcome');
});

Route::get('/commonsetting', function () {
    return view('user/commonsetting');
});

Route::get('/category', function () {
    return view('user/category');
});

Route::get('/checkout', function () {
    return view('user/checkout');
});
Route::get('/book', function () {
    return view('user/bookin');
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
