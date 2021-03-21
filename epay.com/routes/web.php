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
/* Customer */
Route::get('/E-Pay/registration/customer', 'CRegController@index')->name('registration.customer');
Route::post('/E-Pay/registration/customer', 'CRegController@store');

Route::get('/E-Pay/login/customer', 'CLoginController@index')->name('login.customer');
Route::post('/E-Pay/login/customer', 'CLoginController@verify');
Route::get('/E-Pay/logout/customer', 'CLogoutController@index')->name('logout.index');

/* Admin */
Route::get('/E-Pay/registration/admin', 'ARegController@index')->name('registration.admin');
Route::post('/E-Pay/registration/admin', 'ARegController@store');

Route::get('/E-Pay/login/admin', 'ALoginController@index')->name('login.admin');
Route::post('/E-Pay/login/admin', 'ALoginController@verify');
Route::get('/E-Pay/logout/admin', 'ALogoutController@index')->name('logout.index');



        //Route::get('/E-Pay/home/create/admin', 'AHomeController@create')->name('admin.create');
        //Route::post('/E-Pay/home/create/admin', 'AHomeController@store');







        

Route::group(['middleware'=>'sess'],function(){

  
/* Admin */
Route::group(['middleware'=>'admin'],function(){

    Route::get('/E-Pay/home/admin', 'AHomeController@index')->name('admin.admin');


    Route::get('/E-Pay/home/create/customer', 'CHomeController@create')->name('customer.create');
    Route::post('/E-Pay/home/create/customer', 'CHomeController@store');

    //Route::get('/E-Pay/home/profile/admin', 'AHomeController@list')->name('admin.userlist');

    Route::get('/E-Pay/home/profile/admin', 'AHomeController@userlist')->name('admin.userlist');

    Route::get('/E-Pay/home/edit/admin/{id}', 'AHomeController@edit')->name('admin.edit');
    Route::post('/E-Pay/home/edit/admin/{id}', 'AHomeController@update');

    Route::get('/E-Pay/home/delete/admin/{id}', 'AHomeController@delete')->name('admin.delete');
    Route::post('/E-Pay/home/delete/admin/{id}', 'AHomeController@destroy');

    Route::get('/E-Pay/home/details/admin/{id}', 'AHomeController@show')->name('admin.show'); 

    
/*     c-list */

    Route::get('/E-Pay/home/edit/customer/{cid}', 'AHomeController@editC')->name('customerEdit');
    Route::post('/E-Pay/home/edit/customer/{cid}', 'AHomeController@updateC');

    Route::get('/E-Pay/home/delete/customer/{cid}', 'AHomeController@deleteC')->name('customerDelete');
    Route::post('/E-Pay/home/delete/customer/{cid}', 'AHomeController@destroyC');

    Route::get('/E-Pay/home/details/customer/{cid}', 'AHomeController@showcus')->name('customerShow'); 

/*     d-list */
    Route::get('/E-Pay/home/edit/deskManager/{did}', 'AHomeController@editD')->name('deskEdit');
    Route::post('/E-Pay/home/edit/deskManager/{did}', 'AHomeController@updateD');

    Route::get('/E-Pay/home/delete/deskManager/{did}', 'AHomeController@deleteD')->name('deskDelete');
    Route::post('/E-Pay/home/delete/deskManager/{did}', 'AHomeController@destroyD');

    Route::get('/E-Pay/home/details/deskManager/{did}', 'AHomeController@showdesk')->name('deskShow'); 

/*     s-list */
    Route::get('/E-Pay/home/edit/serviceProvider/{sid}', 'AHomeController@editS')->name('serviceEdit');
    Route::post('/E-Pay/home/edit/serviceProvider/{sid}', 'AHomeController@updateS');

    Route::get('/E-Pay/home/delete/serviceProvider/{sid}', 'AHomeController@deleteS')->name('serviceDelete');
    Route::post('/E-Pay/home/delete/serviceProvider/{sid}', 'AHomeController@destroyS');

    Route::get('/E-Pay/home/details/serviceProvider/{sid}', 'AHomeController@showservice')->name('serviceShow');  

/* msg */

    Route::get('/E-Pay/home/create/message/admin', 'AMessageController@create')->name('admin.messagecreate');
    Route::post('/E-Pay/home/create/message/admin', 'AMessageController@store');

    Route::get('/E-Pay/home/list/message/admin', 'AMessageController@list')->name('admin.messagelist');

    Route::get('/E-Pay/home/edit/message/admin/{id}', 'AMessageController@edit')->name('admin.messageedit');
    Route::post('/E-Pay/home/edit/message/admin/{id}', 'AMessageController@update');

    Route::get('/E-Pay/home/delete/message/admin/{id}', 'AMessageController@delete')->name('admin.messagedelete');
    Route::post('/E-Pay/home/delete/message/admin/{id}', 'AMessageController@destroy');

    Route::get('/E-Pay/home/details/message/admin/{id}', 'AMessageController@show')->name('admin.messageshow');


    });
   
   
    Route::group(['middleware'=>'customer'],function(){

/* Customer */

    Route::get('/E-Pay/home/customer', 'CHomeController@index')->name('customer.customer');  /* ->middleware('sess'); */
    //Route::get('/home', ['uses'=>'HomeController@index']);

    Route::get('/E-Pay/home/create/customer', 'CHomeController@create')->name('customer.create');
    Route::post('/E-Pay/home/create/customer', 'CHomeController@store');

    Route::get('/E-Pay/home/profile/customer', 'CHomeController@userlist')->name('customer.userlist');

    Route::get('/E-Pay/home/edit/customer/{id}', 'CHomeController@edit')->name('customer.edit');
    Route::post('/E-Pay/home/edit/customer/{id}', 'CHomeController@update');

    Route::get('/E-Pay/home/delete/customer/{id}', 'CHomeController@delete')->name('customer.delete');
    Route::post('/E-Pay/home/delete/customer/{id}', 'CHomeController@destroy');

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

    /* Customer Balance */

    Route::get('/E-Pay/home/create/balance/customer', 'CBalanceController@create')->name('customer.balancecreate');
    Route::post('/E-Pay/home/create/balance/customer', 'CBalanceController@store');

    Route::get('/E-Pay/home/list/balance/customer', 'CBalanceController@list')->name('customer.balancelist');

    Route::get('/E-Pay/home/cash-in/balance/customer/{id}', 'CBalanceController@cashInedit')->name('customer.cashIn');
    Route::post('/E-Pay/home/cash-in/balance/customer/{id}', 'CBalanceController@cashInupdate');

    Route::get('/E-Pay/home/cash-out/balance/customer/{id}', 'CBalanceController@cashOutedit')->name('customer.cashOut');
    Route::post('/E-Pay/home/cash-out/balance/customer/{id}', 'CBalanceController@cashOutupdate');

    Route::get('/E-Pay/home/loan/balance/customer/{id}', 'CBalanceController@loanedit')->name('customer.loan');
    Route::post('/E-Pay/home/loan/balance/customer/{id}', 'CBalanceController@loanupdate');

    Route::get('/E-Pay/home/mobile-recharge/balance/customer/{id}', 'CBalanceController@rechargeedit')->name('customer.recharge');
    Route::post('/E-Pay/home/mobile-recharge/balance/customer/{id}', 'CBalanceController@rechargeupdate');

    Route::get('/E-Pay/home/delete/balance/customer/{id}', 'CBalanceController@delete')->name('customer.balancedelete');
    Route::post('/E-Pay/home/delete/balance/customer/{id}', 'CBalanceController@destroy');

    Route::get('/E-Pay/home/details/balance/customer/{id}', 'CBalanceController@show')->name('customer.balanceshow');

    });

});