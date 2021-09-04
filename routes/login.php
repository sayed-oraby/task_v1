<?php

use Illuminate\Support\Facades\Route;



Route::get('admin/login', 'AdminLogin@login');
Route::post('admin/login', 'AdminLogin@login_post')->name('admin.login');
Route::get('admin/logout', 'AdminLogin@logout')->name('admin.logout');


Route::get('provider/login', 'ProviderLogin@login');
Route::post('provider/login', 'ProviderLogin@login_post')->name('provider.login');
Route::get('provider/logout', 'ProviderLogin@logout')->name('provider.logout');

     