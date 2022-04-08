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

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

//Default Controller
Route::get('/', 'HomeController@index')->name('index');
Route::post('/home/submit', 'HomeController@submit');
Route::get('/home/skin/{any?}', 'HomeController@getSkin');


Route::get('dashboard/import', 'DashboardController@getImport');
/* Auth & Profile */
Route::get('user/profile','UserController@getProfile');
Route::get('user/theme','UserController@getTheme');
Route::get('user/login','UserController@getLogin');
Route::get('user/register','UserController@getRegister');
Route::get('user/logout','UserController@getLogout');
Route::get('user/reminder','UserController@getReminder');
Route::get('user/reset/{any?}','UserController@getReset');
Route::get('user/reminder','UserController@getReminder');
Route::get('user/activation','UserController@getActivation');
// Social Login
Route::get('user/socialize/{any?}','UserController@socialize');
Route::get('user/autosocialize/{any?}','UserController@autosocialize');
//
Route::post('user/signin','UserController@postSignin');
Route::post('user/login','UserController@postSigninMobile');
Route::post('user/signup','UserController@postSignupMobile');
Route::post('user/create','UserController@postCreate');
Route::post('user/saveprofile','UserController@postSaveprofile');
Route::post('user/savepassword','UserController@postSavepassword');
Route::post('user/doreset/{any?}','UserController@postDoreset');
Route::post('user/request','UserController@postRequest');
/* Posts & Blogs */
Route::get('posts','HomeController@posts');
Route::get('posts/category/{any}','HomeController@posts');
Route::get('posts/read/{any}','HomeController@read');
Route::post('posts/comment','HomeController@comment');
Route::get('posts/remove/{id?}/{id2?}/{id3?}','HomeController@remove');
// Start Routes for Notification 
Route::resource('notification','NotificationController');
Route::get('home/load','HomeController@getLoad');
Route::get('home/lang/{any}','HomeController@getLang');

Route::get('/set_theme/{any}', 'HomeController@set_theme');

include('pages.php');

Route::resource('sximoapi','SximoapiController');
Route::resource('services/posts', 'Services\PostController');


// Routes for  all generated Module
include('module.php');
// End custom routes
Route::group(['middleware' => 'auth'], function () {
	Route::resource('dashboard','DashboardController');

});


Route::group(['namespace' => 'Sximo','middleware' => 'auth'], function () {
	// This is root for superadmin
		
		include('sximo.php');
		
});

Route::group(['namespace' => 'Core','middleware' => 'auth'], function () {
	include('core.php');
});

//VMSL Route
Route::get('getmedicine/{id}','CitController@getMedicineById');


Route::post('sendmail','VmslController@contact_email')->name('contact.email');

// dits
Route::get('portfolio','VmslController@portfolio')->name('portfolio');
Route::get('portfolio/details/{id}','VmslController@portfolioDetails')->name('portfolio.details');

Route::get('all-services','VmslController@servicespage')->name('services');

Route::get('service/single/{id}','VmslController@serviceSingle')->name('service.single');
Route::post('contact/store','VmslController@contactStore')->name('contact.store');


Route::get('roles','VmslController@roles')->name('roles');
Route::get('jobs/{id}/{name}','VmslController@jobs')->name('jobs');
Route::get('job/details/{id}','VmslController@jobsDetails')->name('jobs.details');
Route::get('job/apply/{id}','VmslController@jobApply')->name('jobs.apply');

Route::get('career','VmslController@career')->name('career');
Route::get('career/details/{id}','VmslController@CareerDetails')->name('career.details');
Route::get('career/circular/{id}','VmslController@circular')->name('circular');
Route::post('savecareer','VmslController@savecareer');



