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


Auth::routes();

Route::get('/', ['as'=>'nma.home', 'uses'=>'HomeController@index']);
Route::get('/speakers', ['as'=>'nma.speakers', 'uses'=>'HomeController@speakers']);
Route::get('/contact', ['as'=>'nma.contacts', 'uses'=>'HomeController@contact']);

Route::get('/tickets', ['as'=>'nma.tickets' , 'uses'=>'AuthUser\RegisterController@showRegistrationForm']);
Route::post('/tickets', ['as'=>'nma.tickets', 'uses'=>'AuthUser\RegisterController@register']);
Route::get('/transaction', ['as'=>'nma.transaction', 'uses'=>'TransactionController@transaction'])->middleware('transaction');
Route::get('/getAmount', 'AjaxController@getAmount')->middleware('auth');
Route::get('/about/noc', ['as'=>'nma.about.noc', 'uses'=>'HomeController@about_noc']);
Route::get('/about/cpc', ['as'=>'nma.about.cpc', 'uses'=>'HomeController@about_cpc']);
Route::get('/about/loc', ['as'=>'nma.about.loc', 'uses'=>'HomeController@about_loc']);
Route::get('/about/secretariat', ['as'=>'nma.about.secretariat', 'uses'=>'HomeController@about_secretariat']);
Route::get('/account', ['as'=>'nma.account', 'uses'=>'AccountController@account']);
Route::post('/userPayment', 'TransactionController@userPayment')->name('userPayment');

Route::group(['middleware' => ['auth', 'adminauth']], function () {
   Route::get('/dashboard', ['as'=>'admin.dashboard', 'uses'=>'Admin\DashboardController@index']);
   Route::resource('users', 'Admin\UserController');
   Route::get('/update/payment/{id}', ['as'=> 'update.payment', 'uses'=>'Admin\UpdatePaymentController@updatePayment']);
   Route::post('/update/payment', ['as'=> 'update.payment', 'uses'=>'Admin\UpdatePaymentController@updatePayment_post']);
   Route::post('/search/users', ['as'=>'admin.search.users', 'uses'=>'Admin\SearchController@search_users']);
   Route::get('/exportPaid/{type}', 'Admin\ExcelController@exportPaid');
   Route::get('/exportAll/{type}', 'Admin\ExcelController@exportAll');
});
