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


use App\Http\Controllers\TransactionController;
use App\Transaction;

Auth::routes();

Route::get('/', ['as'=>'nma.home', 'uses'=>'HomeController@index']);
Route::get('/speakers', ['as'=>'nma.speakers', 'uses'=>'HomeController@speakers']);
Route::get('/schedule', ['as'=>'nma.schedule', 'uses'=>'HomeController@schedule']);
Route::get('/contact', ['as'=>'nma.contacts', 'uses'=>'HomeController@contact']);
Route::get('/accomodation', ['as'=>'nma.accomodation', 'uses'=>'HomeController@accomodation']);
Route::get('/tickets', ['as'=>'nma.tickets' , 'uses'=>'AuthUser\RegisterController@showRegistrationForm']);
Route::post('/tickets', ['as'=>'nma.tickets', 'uses'=>'AuthUser\RegisterController@register']);
Route::get('/transaction', ['as'=>'nma.transaction', 'uses'=>'TransactionController@transaction'])->middleware('transaction');
Route::get('/getAmount', 'AjaxController@getAmount');
Route::get('/about/noc', ['as'=>'nma.about.noc', 'uses'=>'HomeController@about_noc']);
Route::get('/about/cpc', ['as'=>'nma.about.cpc', 'uses'=>'HomeController@about_cpc']);
Route::get('/about/loc', ['as'=>'nma.about.loc', 'uses'=>'HomeController@about_loc']);
Route::get('/about/secretariat', ['as'=>'nma.about.secretariat', 'uses'=>'HomeController@about_secretariat']);
Route::get('/docs/gallery', ['as'=>'nma.docs.gallery', 'uses'=>'HomeController@docs_gallery']);
Route::get('/docs/pdf_docs', ['as'=>'nma.docs.pdf', 'uses'=>'HomeController@docs_pdf']);
Route::get('/account', ['as'=>'nma.account', 'uses'=>'AccountController@account']);
Route::get('/certificate', ['as'=>'nma.certificate', 'uses'=>'AccountController@certificate']);
Route::post('/userPayment', 'TransactionController@userPayment')->name('userPayment');
Route::group(['middleware'=>'cors'], function()
{
	Route::apiResource('/api/register', 'Api\Register');
	Route::apiResource('/api/login', 'Api\UserLogin');
	Route::get('/api/getUser/{email}', 'Api\GetController@getUser');
	Route::post('/api/deleteLogin/{email}', 'Api\GetController@deleteLogin');
	Route::get('/api/getImages', 'Api\GetController@getImages');
	Route::get('/api/getPdfs', 'Api\GetController@getPdfs');
	Route::get('/api/getQrcode/{email}/{height}', 'Api\GetController@getQrcode');
});

Route::get('/mobile/transaction/{email}', ['as'=>'nma.mobile.transaction', 'uses'=>'TransactionController@mobile_trans']);

Route::group(['middleware' => ['auth', 'adminauth']], function () {
	Route::get('/dashboard', ['as'=>'admin.dashboard', 'uses'=>'Admin\DashboardController@index']);
	Route::resource('users', 'Admin\UserController');
	Route::get('/update/payment/{id}', ['as'=> 'update.payment', 'uses'=>'Admin\UpdatePaymentController@updatePayment']);
	Route::post('/update/payment', ['as'=> 'update.payment', 'uses'=>'Admin\UpdatePaymentController@updatePayment_post']);
	Route::get('/search/users', ['as'=>'admin.search.users', 'uses'=>'Admin\SearchController@search_users']);
	Route::get('/exportPaid/{type}', 'Admin\ExcelController@exportPaid');
	Route::get('/exportAll/{type}', 'Admin\ExcelController@exportAll');
	Route::resource('/addAdmin', 'Admin\AdminController');
	Route::resource('/hall', 'Admin\HallController');
	Route::resource('/attendance', 'Admin\AttendanceController');
	Route::resource('/pictureUpload', 'Admin\ImageController');
	Route::resource('/docsUpload', 'Admin\PdfController');
	Route::get('/certificate/create/{id}', ['as'=>'certificate.create', 'uses'=>'Admin\CertificateController@create']);
	Route::post('/certificate/create/{id}', ['as'=>'certificate.store', 'uses'=>'Admin\CertificateController@store']);
	Route::get('/certificate/edit/{id}', ['as'=>'certificate.edit', 'uses'=>'Admin\CertificateController@edit']);
	Route::post('/certificate/edit/{id}', ['as'=>'certificate.update', 'uses'=>'Admin\CertificateController@update']);
});
