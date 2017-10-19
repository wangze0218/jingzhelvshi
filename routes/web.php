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
    return view('front.home');
});
Route::get('/about_us', function () {
    return view('front.about_us');
});

Route::get('/services','Front\FrontController@service');
Route::get('/team','Front\FrontController@team');
Route::get('/news','Front\FrontController@news');
Route::get('/services/page/{id}','Front\FrontController@service_page');
Route::get('/team/page/{id}','Front\FrontController@team_page');
Route::get('/news/page/{id}','Front\FrontController@news_page');

//
//========================================================================================================
//
//========================================================================================================
//
//========================================================================================================
Route::resource('/sign_in','Front\SignInController');
Route::group(['middleware' => 'BehindMiddleware'],function (){
    //后台首页
    Route::get('/behind', function () {
        return view('behind.index');
    });
    //用户管理
    Route::resource('/behind/user','Behind\UserController');
    //业务管理
    Route::resource('/behind/service','Behind\ServiceController');
    Route::resource('/behind/service_article','Behind\ServiceArticleController');
    //团队管理
    Route::resource('/behind/team','Behind\TeamController');
    Route::resource('/behind/team_article','Behind\TeamArticleController');
    //新闻管理
    Route::resource('/behind/news','Behind\NewsController');
    Route::resource('/behind/news_article','Behind\NewsArticleController');
});