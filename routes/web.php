<?php

Route::get('/', 'HomeController@index')->name('home.index');

Route::get('/post/{slug}', 'HomeController@show')->name('post.show');
Route::get('/tag/{slug}', 'HomeController@tag')->name('tag.show');
Route::get('/category/{slug}', 'HomeController@category')->name('category.show');

Route::group(['middleware'=>'guest'], function (){
    Route::get('/register', 'AuthController@registerForm');
    Route::post('/register', 'AuthController@register');
    Route::get('/login', 'AuthController@loginForm')->name('login');
    Route::post('/login', 'AuthController@login');
});

Route::group(['middleware'=>'auth'], function (){
    Route::get('/profile', 'ProfileController@index');
    Route::post('/profile', 'ProfileController@store');
    Route::post('/comment', 'CommentsController@store');
    Route::get('/logout', 'AuthController@logout');
});

//*=== ADMIN ===*
Route::group(['prefix'=>'admin','namespace'=>'Admin', 'middleware'=>'admin'], function (){
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/tags', 'TagsController');
    Route::resource('/users', 'UsersController');
    Route::resource('/posts', 'PostsController');
    Route::get('/comments', 'CommentsController@index');
});
