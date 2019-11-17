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

use App\Models\Category;

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

Route::get('trip/deposit/{id}', [
    'as' => 'trip.deposit',
    'uses' => 'CheckoutController@tripDepositIndex',
]);

Route::get('trip/process/{id}', [
    'as' => 'trip.process',
    'uses' => 'CheckoutController@tripProcessIndex',
]);

Route::get('trip/end/{id}', [
    'as' => 'trip.end',
    'uses' => 'CheckoutController@tripEndIndex',
]);

Route::post('/feedback/{id}/{point}', [
    'as' => 'feedback',
    'uses' => 'CarController@feedback',
]);

Route::post('/feedback-end/{id}/{point}', [
    'as' => 'feedback.end',
    'uses' => 'CarController@feedbackEndTrip',
]);

Route::get('trips', [
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

Route::get('/carsetting/{id}', [
    'as' => 'carSetting',
    'uses' => 'CarController@carSettingIndex',
]);

Route::post('/carsetting-post/{id}', [
    'as' => 'carSettingUpdate',
    'uses' => 'CarController@carSettingUpdate',
]);

Route::post('hide-car/{id}', [
    'as' => 'changeStatusHideCar',
    'uses' => 'CarController@changeStatusHideCar',
]);

Route::post('update-image-car/{id}', [
    'as' => 'updateImageCar',
    'uses' => 'CarController@updateImageCar',
]);


/* Admin */
Route::get('admin/login','Admin\AdminController@getLogin');
Route::post('admin/login','Admin\AdminController@postLogin')->name('admin.login');

Route::group(['prefix' => 'admin'], function (){
    Route::get('logout','Admin\AdminController@logout');

    Route::get('index', [
        'as' => 'admin.index',
        'uses' => 'Admin\AdminController@getIndex',
    ]);

    Route::get('thongke', [
        'as' => 'admin.thongke',
        'uses' => 'Admin\AdminController@getIndex',
    ]);

    Route::get('user', [
        'as' => 'admin.user.index',
        'uses' => 'Admin\UserController@getIndex',
    ]);

    Route::get('user/delete/{id}', [
        'as' => 'admin.user.delete',
        'uses' => 'Admin\UserController@deleteUser',
    ]);

    Route::get('car', [
        'as' => 'admin.car.index',
        'uses' => 'Admin\CarController@getIndex',
    ]);

    Route::get('car/accept/{id}', [
        'as' => 'admin.car.accept',
        'uses' => 'Admin\CarController@acceptCar',
    ]);

    Route::get('car/reject/{id}', [
        'as' => 'admin.car.reject',
        'uses' => 'Admin\CarController@rejectCar',
    ]);

    Route::get('category/category', [
        'as' => 'admin.category.index',
        'uses' => 'Admin\CategoryController@getCategoryIndex',
    ]);

    Route::post('car/category-edit-brand/{id}', [
        'as' => 'admin.category.edit_brand',
        'uses' => 'Admin\CategoryController@editBrandParent',
    ]);


//    Route::get('thongke','AdminController@getThongke');
//    Route::get('report','AdminController@getReport');
//    Route::group(['prefix'=>'users'],function(){
//        Route::get('list','AdminController@getListUser');
//        Route::get('edit/{id}','AdminController@getUpdateUser');
//        Route::post('edit/{id}','AdminController@postUpdateUser')->name('admin.user.edit');
//        Route::get('del/{id}','AdminController@DeleteUser');
//    });
//    Route::group(['prefix'=>'motelrooms'],function(){
//        Route::get('list','AdminController@getListMotel');
//        Route::get('approve/{id}','AdminController@ApproveMotelroom');
//        Route::get('unapprove/{id}','AdminController@UnApproveMotelroom');
//        Route::get('del/{id}','AdminController@DelMotelroom');
        // Route::get('edit/{id}','AdminController@getUpdateUser');
        // Route::post('edit/{id}','AdminController@postUpdateUser')->name('admin.user.edit');
       // Route::get('del/{id}','AdminController@DeleteUser');
//    });
});
/* End Admin */

//Route::post('/search-1', [
//    'as' => 'searchOptions',
//    'uses' => 'SearchController@searchOptions',
//]);
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
Route::get('/commonsetting', function () {
    $categories = Category::where('id_parent', 0)->get();

    return view('user/commonsetting', ['categories' =>$categories]);
});

Route::get('/category', function () {
    return view('user/category');
});

