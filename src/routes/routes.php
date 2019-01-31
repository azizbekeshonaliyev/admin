<?php

Route::middleware('web')->name('admin.')->prefix('admin')->namespace('Bek96\Admin\Http\Controllers')->group(function() {
    Route::get('login', 'AdminController@loginPage')->name('admin.login.page');

});

?>