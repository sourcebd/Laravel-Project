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

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
});

Route::get('/E-Pay', 'MainController@index')->name('main.index');

Route::get('/E-Pay/registration/customer', 'CRegController@index')->name('registration.customer');
Route::post('/E-Pay/registration/customer', 'CRegController@store');

Route::get('/E-Pay/login/customer', 'CLoginController@index')->name('login.customer');
Route::post('/E-Pay/login/customer', 'CLoginController@verify');
Route::get('/E-Pay/logout/customer', 'CLogoutController@index')->name('logout.index');


Route::group(['middleware'=>'sess'],function(){
/* Customer */
    Route::get('/E-Pay/home/customer', 'CHomeController@index')->name('customer.customer');  /* ->middleware('sess'); */
    //Route::get('/home', ['uses'=>'HomeController@index']);

    Route::get('/E-Pay/home/create/customer', 'CHomeController@create')->name('customer.create');
    Route::post('/E-Pay/home/create/customer', 'CHomeController@store');

    Route::get('/E-Pay/home/profile/customer', 'CHomeController@userlist')->name('customer.userlist');

    Route::get('/E-Pay/home/edit/customer/{id}', 'CHomeController@edit')->name('customer.edit');
    Route::post('/E-Pay/home/edit/customer/{id}', 'CHomeController@update');

    Route::get('/E-Pay/home/details/customer/{id}', 'CHomeController@show')->name('customer.show');

/* Customer Review */

    Route::get('/E-Pay/home/create/review/customer', 'CReviewController@create')->name('customer.reviewcreate');
    Route::post('/E-Pay/home/create/review/customer', 'CReviewController@store');

    Route::get('/E-Pay/home/list/review/customer', 'CReviewController@list')->name('customer.reviewlist');

    Route::get('/E-Pay/home/edit/review/customer/{id}', 'CReviewController@edit')->name('customer.reviewedit');
    Route::post('/E-Pay/home/edit/review/customer/{id}', 'CReviewController@update');

    Route::get('/E-Pay/home/delete/review/customer/{id}', 'CReviewController@delete')->name('customer.reviewdelete');
    Route::post('/E-Pay/home/delete/review/customer/{id}', 'CReviewController@destroy');

    Route::get('/E-Pay/home/details/review/customer/{id}', 'CReviewController@show')->name('customer.reviewshow');

    Route::group(['middleware'=>'admin'],function(){

    Route::get('/E-Pay/home/delete/customer/{id}', 'CHomeController@delete')->name('customer.delete');
    Route::post('/E-Pay/home/delete/customer/{id}', 'CHomeController@destroy');

    });


});