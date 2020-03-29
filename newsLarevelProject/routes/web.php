<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages/welcome');
});


Route::get('demo/','PageController@getAbout');

// Route::resource('news', 'NewsController');

Route::get('news','NewsController@index')->name('news.index');

Route::get('blog/single/{id}','NewsController@show')->name('news.single');
Route::get('admin','NewsCreateController@index')->name('admin') ;
Route::get('admin/create/post','NewsCreateController@create')->name('news.create') ;
Route::post('admin/store/post','NewsCreateController@store')->name('news.store') ;

Route::get('admin/show/post/{id}','NewsCreateController@show')->name('news.show') ;
Route::get('admin/edit/post/{id}','NewsCreateController@edit')->name('news.edit') ;
Route::post('admin/update/post/{id}','NewsCreateController@update')->name('news.update');

Route::get('admin/delete/post/{id}','NewsCreateController@destroy')->name('news.delete');


Route::get('admin/category','CategoryController@index')->name('admin.category') ;
Route::get('admin/create/category','CategoryController@create')->name('category.create') ;
Route::post('admin/store/category','CategoryController@store')->name('category.store') ;

// Route::get('admin/show/post/{id}','NewsCreateController@show')->name('news.show') ;
// Route::get('admin/edit/post/{id}','NewsCreateController@edit')->name('news.edit') ;
// Route::post('admin/update/post/{id}','NewsCreateController@update')->name('news.update');

Route::get('admin/delete/category/{id}','CategoryController@destroy')->name('category.delete');



Route::get('news/entertainment','NewsController@entertainment')->name('news.entertainment');
Route::get('news/sports','NewsController@sports')->name('news.sports');
Route::get('news/world','NewsController@world')->name('news.world');
Route::get('news/india','NewsController@india')->name('news.india');
