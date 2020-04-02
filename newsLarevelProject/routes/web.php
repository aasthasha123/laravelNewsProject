<?php

use Illuminate\Support\Facades\Route;

// Web Routes

Route::get('demo/','PageController@getAbout');
Route::get('/','NewsController@index')->name('news.index');

Route::get('news/single/{id}','NewsController@show')->name('news.single');


Route::get('admin/','NewsCreateController@index')->name('admin') ;
Route::get('admin/create/post','NewsCreateController@create')->name('news.create') ;
Route::post('admin/store/post','NewsCreateController@store')->name('news.store') ;
Route::get('admin/show/post/{id}','NewsCreateController@show')->name('news.show') ;
Route::get('admin/edit/post/{id}','NewsCreateController@edit')->name('news.edit') ;
Route::post('admin/update/post/{id}','NewsCreateController@update')->name('news.update');
Route::get('admin/delete/post/{id}','NewsCreateController@destroy')->name('news.delete');
Route::get('admin/category','CategoryController@index')->name('admin.category') ;
Route::get('admin/create/category','CategoryController@create')->name('category.create') ;
Route::post('admin/store/category','CategoryController@store')->name('category.store') ;
Route::get('admin/delete/category/{id}','CategoryController@destroy')->name('category.delete');
Route::get('news/category/{category_name}','NewsController@categoryNews')->name('news.categoryNews') ;


