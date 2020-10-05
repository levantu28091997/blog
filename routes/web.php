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

// $prefixAdmin = config('levantu.prefix_admin');
$prefixAdmin = Config::get('prefix_admin', 'admin');;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category', function () {
    return 'Category';
});

Route::group(['prefix' => $prefixAdmin], function () {
    Route::get('/', function () {
        return "Admin - Dashboard";
    });

    //======================================== DASHBOARD ===================================
    $prefixUser = 'dashboard';
    $controllerName = 'dashboard';
    Route::group(['prefix' => $prefixUser], function () use($controllerName){
        $controller = ucfirst($controllerName).'Controller@';
        Route::get('/',                           ['as'=> $controllerName,           'uses'=>$controller.'index']);
    });

    //======================================== USER ===================================
    $prefixUser = 'user';
    $controllerUserName = 'user';
    Route::group(['prefix' => $prefixUser], function () use($controllerUserName){
        $controller = ucfirst($controllerUserName).'Controller@';
        Route::get('/',                           ['as'=> $controllerUserName,           'uses'=>$controller.'index']);
        Route::get('form/{id?}',                  ['as'=> $controllerUserName.'/form',   'uses'=>$controller.'form'])->where('id','[0-9]+');
        Route::get('delete/{id}',                 ['as'=> $controllerUserName.'/delete', 'uses'=>$controller.'delete'])->where('id','[0-9]+');
        Route::get('change-status-{active}/{id}', ['as'=> $controllerUserName.'/change', 'uses'=>$controller.'change'])->where('id','[0-9]+');
    });

    //======================================== SLIDE ===================================
    Route::get('/slide', function () {
        return "Admin - Slide";
    });

    //======================================== PRODUCT ===================================
    Route::get('/product', function () {
        return "Admin - Product";
    });
});
