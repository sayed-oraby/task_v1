<?php


use Illuminate\Support\Facades\Route;



Route::get('/', 'AdminController@home');


// Admins

Route::resource('manager','AdminController',
['names' => 'admin.manager']);

// Admin Update Password
Route::patch('manager/update_password/{id}', 'AdminController@UpdatePass')->name('admin.manager.UpdatePass');

Route::get('manager/destroy/{id}','AdminController@destroy');



// Provider

Route::resource('provider','ProviderController',
['names' => 'admin.provider']);

// Provider Update Password
Route::patch('provider/update_password/{id}', 'ProviderController@UpdatePass')->name('admin.provider.UpdatePass');

Route::get('provider/destroy/{id}','ProviderController@destroy');


