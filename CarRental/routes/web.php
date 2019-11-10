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

Route::get('car/{id}', [
    'as' => 'car.carDetail',
    'uses' => 'CarController@carSingle',
]);

Route::post('checkout/{id}', [
    'as' => 'car.checkout',
    'uses' => 'CheckoutController@checkoutCar',
]);

Route::post('change-status-checkout/{id}', [
    'as' => 'trip.change',
    'uses' => 'TripController@changeStatusTrip',
]);

Route::post('book/{id}', [
    'as' => 'car.book',
    'uses' => 'CheckoutController@bookCarAjax',
]);

Route::get('trip/detail/{id}', [
    'as' => 'trip.detail',
    'uses' => 'CheckoutController@tripDetailIndex',
]);

Route::post('/feedback/{id}/{point}', [
    'as' => 'feedback',
    'uses' => 'CarController@feedback',
]);

Route::get('trip', [
    'as' => 'car.trip',
    'uses' => 'TripController@index',
]);

Route::get('my-favorite', [
    'as' => 'car.favorite',
    'uses' => 'UserController@indexMyFavoriteCar',
]);

Route::post('my-favorite-car/{id}', [
    'as' => 'car.favorite.post',
    'uses' => 'UserController@myFavoriteCar',
]);

Route::post('remove-favorite-car/{id}', [
    'as' => 'car.favorite.remove',
    'uses' => 'UserController@removeFavoriteCar',
]);

Route::post('/change-password', [
    'as' => 'changePassword',
    'uses' => 'UserController@changePassword',
]);

Route::get('/profile', [
    'as' => 'myProflie',
    'uses' => 'UserController@profileIndex',
]);

Route::post('/change-profile', [
    'as' => 'editProfile',
    'uses' => 'UserController@editProfile',
]);

Route::post('/change-avatar', [
    'as' => 'changeAvatar',
    'uses' => 'UserController@changeAvatar',
]);

Route::get('/manage', function () {
    return view('user/manage-car-detail');
});



//Route::post('/search-1', [
//    'as' => 'searchOptions',
//    'uses' => 'SearchController@searchOptions',
//]);
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/commonsetting', function () {
//    return view('user/commonsetting');
//});
//
//Route::get('/category', function () {
//    return view('user/category');
//});
//
//Route::get('/book', function () {
//    return view('user/bookin');
//});
//
//Route::get('/myfavorite', function () {
//    return view('user/favorite');
//});

