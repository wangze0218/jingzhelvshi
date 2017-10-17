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

Route::get('/services', function () {
    return view('front.services');
});

Route::get('/news', function () {
    return view('front.news');
});

Route::get('/about_us', function () {
    return view('front.about_us');
});

Route::get('/team', function () {
    return view('front.team');
});
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