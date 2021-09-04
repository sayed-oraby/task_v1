<?php


use Illuminate\Support\Facades\Route;


// Home

Route::get('/', 'ProviderController@home');



// Profile

Route::get('profile', 'ProfileController@home');
Route::post('profile', 'ProfileController@update');


// Locations

Route::resource('locations','LocationsController',
['names' => 'provider.locations']);

Route::get('locations/destroy/{id}','LocationsController@destroy');
