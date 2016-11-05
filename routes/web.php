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
Route::get('alwayMenu','pagesController@alwayMenu');
Route::get('alwayMenuIn','pagesController@alwayMenuIn');
Route::get('blankPage','pagesController@blankPage');
Route::get('calendar','pagesController@calendar');
Route::get('chartFlot','pagesController@chartFlot');
Route::get('chartMorris','pagesController@chartMorris');
Route::get('chartOther','pagesController@chartOther');
Route::get('CloseRightSlider','pagesController@CloseRightSlider');
Route::get('dashboard','pagesController@dashboard');
Route::get('dashboard2','pagesController@dashboard2');
Route::get('drop_upload','pagesController@drop_upload');
Route::get('fileManager','pagesController@fileManager');
Route::get('footerMenu','pagesController@footerMenu');
Route::get('footerShow','pagesController@footerShow');
Route::get('form','pagesController@form');
Route::get('form_ajax','pagesController@form_ajax');
Route::get('form_x_edit','pagesController@form_x_edit');
Route::get('formComponents','pagesController@formComponents');
Route::get('formMutiselect','pagesController@formMutiselect');
Route::get('formValidate','pagesController@formValidate');
Route::get('formWizard','pagesController@formWizard');
Route::get('hideUserPanel','pagesController@hideUserPanel');
Route::get('hideUserPanelIn','pagesController@hideUserPanelIn');
Route::get('images_manager','pagesController@images_manager');
/* Route::get('index','pagesController@index'); */
Route::get('load_img','pagesController@load_img');
Route::get('lockscreen','pagesController@lockscreen');
Route::post('login','pagesController@login');
Route::get('login','pagesController@login');
Route::get('mailBox','pagesController@mailBox');
Route::get('map','pagesController@map');
Route::get('menu','pagesController@menu');
Route::get('menuReal','pagesController@menuReal');
Route::get('menuVertical','pagesController@menuVertical');
Route::get('page_invoice','pagesController@page_invoice');
Route::get('page_search','pagesController@page_search');
Route::get('pages_pricing','pagesController@pages_pricing');
Route::get('profile','pagesController@profile');
Route::get('register','pagesController@register');
Route::get('showhide','pagesController@showhide');
Route::get('showRightPanel','pagesController@showRightPanel');
Route::get('siteMap','pagesController@siteMap');
Route::get('slide','pagesController@slide');
Route::get('sliderIntro','pagesController@sliderIntro');
Route::get('table','pagesController@table');
Route::get('tableResponsive','pagesController@tableResponsive');
Route::get('tagInput','pagesController@tagInput');
Route::get('timeline','pagesController@timeline');
Route::get('topMenu','pagesController@topMenu');
Route::get('ui','pagesController@ui');
Route::get('ui_alert','pagesController@ui_alert');
Route::get('ui_button','pagesController@ui_button');
Route::get('ui_icon','pagesController@ui_icon');
Route::get('ui_modal','pagesController@ui_modal');
Route::get('ui_nestable','pagesController@ui_nestable');
Route::get('ui_panel','pagesController@ui_panel');
Route::get('ui_slide','pagesController@ui_slide');
Route::get('ui_typography','pagesController@ui_typography');
Route::get('/lang/{lang}','LanguageController@dashboard');
Route::get('generate','pagesController@generate');
Route::get('dashboard2','pagesController@dashboardTwo');
Route::get('dashboard3','pagesController@dashboardThree');
Route::get('dashboard4','pagesController@dashboardFour');
Route::get('dashboard5','pagesController@dashboardFive');
Route::get('dashboard6','pagesController@dashboardSix');
Route::get('dashboard7','pagesController@dashboardSeven');
Route::get('dashboard8','pagesController@dashboardEight');
Route::get('dashboard9','pagesController@dashboardNine');
Route::get('dashboard10','pagesController@dashboardTen');
Route::post('checkLogin','pagesController@checkLogin');
Route::get('checkLogin','pagesController@checkLogin');
Route::get('dashboardTest8','pagesController@dashboardTesteight');
Route::get('getMyTask','pagesController@getMyTask');
Route::post('getMyTask','pagesController@getMyTask');
Route::get('page_chat','pagesController@pagechat');
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


//Route::controllers([
//'auth'=>'Auth\AuthController',
//'password'=>'Auth\PasswordController',
//]);
//Route::get('login','HomeController@getLogin');
//Route::get('switch_lang.php','pagesController@switch_lang');
//Route::get('lang_en.php','pagesController@lang_en');
//Route::get('lang_fa.php','pagesController@lang_fa');
//Route::get('define_lang','pagesController@define_lang');
//Route::get('dashboard','HomeController@dashboard');


//Route::group(['middleware'=>['web']],function() {
//	Route::get('/login',['as'=>'login','uses'=>AuthController@login'])
//	Route::get('/handleLogin',['as'=>'handleLogin','uses'=>AuthController@handleLogin']);
//});
