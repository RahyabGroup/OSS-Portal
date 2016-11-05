<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


//Route::get('dashboard',function(){return view('dashboard');});

Route::get('/','pagesController@welcome');
Route::get('404','pagesController@forofor');

Route::get('aroosha_oss','pagesController@aroosha_oss');
Route::get('dashboard2','pagesController@dashboard2');
Route::get('drop_upload','pagesController@drop_upload');

/* Route::get('index','pagesController@index'); */

Route::post('login','pagesController@login');
Route::get('login','pagesController@login');

Route::get('/lang/{lang}','LanguageController@dashboard');
Route::get('generate','pagesController@generate');
Route::get('dashboard2','pagesController@dashboardTwo');
Route::get('dashboard3','pagesController@dashboardThree');
Route::get('dashboard4','pagesController@dashboardFour');
Route::get('dashboard5','pagesController@dashboardFive');
Route::get('my_tickets','pagesController@my_tickets');
Route::get('dashboard7','pagesController@dashboardSeven');
Route::get('dashboard8','pagesController@dashboardEight');
Route::get('dashboard9','pagesController@dashboardNine');
Route::get('dashboard10','pagesController@dashboardTen');
Route::post('checkLogin','pagesController@checkLogin');
Route::get('checkLogin','pagesController@checkLogin');
Route::get('dashboardTest8','pagesController@dashboardTesteight');
Route::get('getMyTask','pagesController@getMyTask');
Route::post('getMyTask','pagesController@getMyTask');

Route::get('ui_panel2','pagesController@ui_paneltwo');
Route::get('pagination','pagesController@pagination');
Route::post('ui_panelx','pagesController@ui_panelx');
Route::get('ui_panelx','pagesController@ui_panelx');
Route::get('paginationx','pagesController@paginationx');
Route::get('paginationDetaile','pagesController@paginationDetaile');
Route::get('variables','pagesController@variables');
Route::get('taskDetailes','pagesController@taskDetailes');

Route::get('data','pagesController@data');


Route::get('loginn','pagesController@loginn');
Route::post('loginn','pagesController@loginn');


