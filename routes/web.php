<?php

//首页
Route::get('/', 'StaticPagesController@home')->name('home');
//相册资源路由
Route::resource('albums','AlbumsController');
//相片资源路由
Route::resource('photos','PhotosController');

