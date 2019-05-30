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


/*Corporate users root collections*/
Route::namespace('CpUser')->prefix('cpuser')->middleware(['auth'])->group(function() {
    Route::get('personalInfo/{id}', 'PersonalInfoController@personalInfo')->name('personalInfo');
    Route::resource('orders', 'OrdersController');
    Route::resource('users', 'UsersController');
    Route::resource('logs', 'LogsController');
});



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){

return view('pages.home');
});


Route::get('/setting', function(){
return view('pages.settings');
});

Route::get('/order', function(){
	return view('pages.order');
});

Route::get('/log', function(){
return view('pages.log');
});

Route::get('/admin-log', function(){
return view('pages.admin-log');
});

Route::get('/dashboard', function(){
return view('pages.dashboard');
});
Route::get('/admin-order', function(){
return view('pages.admin-order');
});

Route::get('/user', function(){
return view('pages.user');
});

// Tesing API
Route::get('/test', function() {
	return 'Hello';
});



