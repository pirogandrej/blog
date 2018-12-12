<?php

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/post/{slug}', 'HomeController@show')->name('post.show');
Route::get('/tag/{slug}', 'HomeController@tag')->name('tag.show');
Route::get('/category/{slug}', 'HomeController@category')->name('category.show');
Route::get('/register', 'AuthController@registerForm');
Route::post('/register', 'AuthController@register');
Route::get('/login', 'AuthController@loginForm');

//*=== ADMIN ===*

Route::group(['prefix'=>'admin','namespace'=>'Admin'], function (){
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/tags', 'TagsController');
    Route::resource('/users', 'UsersController');
    Route::resource('/posts', 'PostsController');
});
