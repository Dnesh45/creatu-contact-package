<?php

use Illuminate\Http\Request;

Route::group(['namespace' => 'Dinu\CreatuContact\Http\Controllers'],function(){

    Route::get('/contact','ContactController@index');
    
    Route::post('/contact','ContactController@send')->name('contact');

});

