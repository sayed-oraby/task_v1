<?php

use Illuminate\Support\Facades\Route;



//////////// Login

require_once __DIR__ . '/login.php';



Route::get('/', function () {
    return view('welcome');
});



//////////// Admin

Route::group(['middleware' => ['AuthAdmin:admin'] , 'namespace' => 'Admin' , 'prefix' => 'admin'],function () {

    require_once __DIR__ . '/admin.php';

});


//////////// Admin

Route::group(['middleware' => ['AuthProvider:provider'] , 'namespace' => 'Provider' , 'prefix' => 'provider'],function () {

    require_once __DIR__ . '/provider.php';

});





Route::get('{user_name}','HomeController@locations');
