<?php

Route::get('/', 'SandiController@common');
Route::get('/company', 'SandiController@company');
Route::get('/blog', 'SandiController@blog');

//*=== ADMIN ===*

Route::group(['prefix'=>'admin','namespace'=>'Admin'], function (){
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/tags', 'TagsController');
    Route::resource('/users', 'UsersController');
});
