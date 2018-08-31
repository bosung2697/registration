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

Route::get('/', function () {
    return redirect('/home');
});
/******************************************법무사 소개************************************************/
Route::get('/intro','User\IntroController@intro');

/******************************************개인파산/회생************************************************/
Route::get('/bankruptcy','User\BankNRehab\BankNRehabController@bankruptcy');
Route::get('/rehabilitation','User\BankNRehab\BankNRehabController@rehabilitation');

/******************************************온라인등기대행************************************************/
Route::get('/online_reg','User\Registration\RegistrationController@registration');

/******************************************자주하는 질문************************************************/
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/faq_registration', 'User\FAQ\FAQ_RegistrationController@index');
Route::get('/faq_rehabilitation', 'User\FAQ\FAQ_RehabilitationController@index');
Route::get('/faq_bankruptcy', 'User\FAQ\FAQ_BankruptcyController@index');
Route::get('/faq_in_common', 'User\FAQ\FAQ_In_CommonController@index');
Route::get('/faq_etc', 'User\FAQ\FAQ_ETCController@index');


Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return redirect('admin/user');
    });
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

/*********************************유저 관리***************************************************/
    Route::get('/user/', 'Admin\User\UserController@index');
    Route::get('/user/{id}', 'Admin\User\UserController@show');
    Route::post('/search_user','Admin\User\UserController@search');

/*********************************자주하는 질문***************************************************/
//개인파산
    Route::get('/faq_bankruptcy/', 'Admin\FAQ\FAQ_BankruptcyController@index');
    Route::get('/faq_bankruptcy/create', 'Admin\FAQ\FAQ_BankruptcyController@create');
    Route::get('/faq_bankruptcy/{id}/edit', 'Admin\FAQ\FAQ_BankruptcyController@edit');
    Route::put('/faq_bankruptcy/{id}/update', 'Admin\FAQ\FAQ_BankruptcyController@update')->name('admin.faq_bankruptcy.update');
    Route::delete('/faq_bankruptcy/{id}', 'Admin\FAQ\FAQ_BankruptcyController@delete')->name('admin.faq_bankruptcy.delete');
    Route::post('/faq_bankruptcy/store', 'Admin\FAQ\FAQ_BankruptcyController@store')->name('admin.faq_bankruptcy.store');
//등기
    Route::get('/faq_registration/', 'Admin\FAQ\FAQ_RegistrationController@index');
    Route::get('/faq_registration/create', 'Admin\FAQ\FAQ_RegistrationController@create');
    Route::get('/faq_registration/{id}/edit', 'Admin\FAQ\FAQ_RegistrationController@edit');
    Route::put('/faq_registration/{id}/update', 'Admin\FAQ\FAQ_RegistrationController@update')->name('admin.faq_registration.update');
    Route::delete('/faq_registration/{id}', 'Admin\FAQ\FAQ_RegistrationController@delete')->name('admin.faq_registration.delete');
    Route::post('/faq_registration/store', 'Admin\FAQ\FAQ_RegistrationController@store')->name('admin.faq_registration.store');
//개인회생
    Route::get('/faq_rehabilitation/', 'Admin\FAQ\FAQ_RehabilitationController@index');
    Route::get('/faq_rehabilitation/create', 'Admin\FAQ\FAQ_RehabilitationController@create');
    Route::get('/faq_rehabilitation/{id}/edit', 'Admin\FAQ\FAQ_RehabilitationController@edit');
    Route::put('/faq_rehabilitation/{id}/update', 'Admin\FAQ\FAQ_RehabilitationController@update')->name('admin.faq_rehabilitation.update');
    Route::delete('/faq_rehabilitation/{id}', 'Admin\FAQ\FAQ_RehabilitationController@delete')->name('admin.faq_rehabilitation.delete');
    Route::post('/faq_rehabilitation/store', 'Admin\FAQ\FAQ_RehabilitationController@store')->name('admin.faq_rehabilitation.store');
//개인 파산 및 개인 회생 공통
    Route::get('/faq_in_common/', 'Admin\FAQ\FAQ_InCommonController@index');
    Route::get('/faq_in_common/create', 'Admin\FAQ\FAQ_InCommonController@create');
    Route::get('/faq_in_common/{id}/edit', 'Admin\FAQ\FAQ_InCommonController@edit');
    Route::put('/faq_in_common/{id}/update', 'Admin\FAQ\FAQ_InCommonController@update')->name('admin.faq_in_common.update');
    Route::delete('/faq_in_common/{id}', 'Admin\FAQ\FAQ_InCommonController@delete')->name('admin.faq_in_common.delete');
    Route::post('/faq_in_common/store', 'Admin\FAQ\FAQ_InCommonController@store')->name('admin.faq_in_common.store');
//기타
    Route::get('/faq_etc/', 'Admin\FAQ\FAQ_ETCController@index');
    Route::get('/faq_etc/create', 'Admin\FAQ\FAQ_ETCController@create');
    Route::get('/faq_etc/{id}/edit', 'Admin\FAQ\FAQ_ETCController@edit');
    Route::put('/faq_etc/{id}/update', 'Admin\FAQ\FAQ_ETCController@update')->name('admin.faq_etc.update');
    Route::delete('/faq_etc/{id}', 'Admin\FAQ\FAQ_ETCController@delete')->name('admin.faq_etc.delete');
    Route::post('/faq_etc/store', 'Admin\FAQ\FAQ_ETCController@store')->name('admin.faq_etc.store');
});