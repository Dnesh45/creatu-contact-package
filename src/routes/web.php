<?php

use Illuminate\Http\Request;

Route::group(['middleware' => 'web'],function(){

    Route::get('/contact','Dinu\CreatuContact\Http\Controllers\ContactController@index');
    
    Route::post('/contact','Dinu\CreatuContact\Http\Controllers\ContactController@send')->name('contact');

});

