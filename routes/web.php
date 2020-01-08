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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'FrontEndController\frontendController@index')->name('fe-home');

//Admin Routes
Route::any('/admin-login', 'BackEndControllers\loginController@login')->name('admin-login');

Route::get('/log-out', 'BackEndControllers\loginController@logout')->name('log-out');

Route::put('/password-update/{id}', 'BackEndControllers\loginController@u_pass')->name('update_pwd');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {

    Route::get('/index', 'BackEndControllers\BackEndController@index')->name('admin-index');

    Route::resource('/contact-info', 'BackEndControllers\contactInfoController');

    Route::resource('/roles', 'BackEndControllers\rolesController');

    Route::resource('/skills', 'BackEndControllers\skillsController');

    Route::resource('/works', 'BackEndControllers\worksController');

    Route::resource('/experience', 'BackEndControllers\experienceController');

    Route::resource('/profile', 'BackEndControllers\profileController');


});

Auth::routes(['verify' => true]);

//Route::get('/home', 'HomeController@index')->name('home');
