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

// 请求网址默认跳转到homepage的展示页面
Route::get('/', function () {
    return redirect('/front/homepage/index');
});

// 设置前台的默认首页为homepage的展示页面
Route::get('/front', function () {
    return redirect('/front/homepage/index');
});

// 前台主页
Route::get('/front/homepage/index', function () {
    return view('original.front.homepage.index');
}); // 展示页面

// 前台搜索界面
Route::get('/front/search/index', function () {
    return view('original.front.search.index');
}); // 展示页面

// 前台expression界面
Route::get('/front/expression/index', function () {
    return view('original.front.expression.index');
}); // 展示页面

// 前台markers界面
Route::get('/front/markers/index', function () {
    return view('original.front.markers.index');
}); // 展示页面

// 前台network界面
Route::get('/front/network/index', function () {
    return view('original.front.network.index');
}); // 展示页面

// 前台下载界面
Route::get('/front/download/index', function () {
    return view('original.front.download.index');
}); // 展示页面

// 前台about界面
Route::get('/front/about/index', function () {
    return view('original.front.about.index');
}); // 展示页面
