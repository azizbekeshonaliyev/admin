<?php

Route::middleware('web')->name('bek96.')->prefix('bek96')->namespace('Bek96\Admin\Http\Controllers')->group(function() {
    Route::any('dashboard','PageController@dashboard')->name('dashboard');
    Route::any('editors','PageController@editors')->name('editors');
    Route::any('blank','PageController@blank')->name('blank');
});
