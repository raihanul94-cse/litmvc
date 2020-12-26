<?php
    Route::get('/','HomeController@index');
    Route::get('/pages','PageController@index');
    Route::get('/pages/create','PageController@create');
    Route::get('/pages/store','PageController@store');
    