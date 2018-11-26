<?php

Route::get('/', 'HomeController@index')->name('home.index');


//*=== ADMIN ===*

Route::group(['prefix'=>'admin','namespace'=>'Admin'], function (){
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/tags', 'TagsController');
    Route::resource('/users', 'UsersController');
    Route::resource('/posts', 'PostsController');
});
