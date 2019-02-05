<?php

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


Route::namespace("Admin")->prefix("admin")->name("admin.")->group(function (){
    Route::get("/","PanelController@index")->name("panel");
    Route::resource("/article","ArticleController");
    Route::resource("/comment","CommentController");
    Route::resource("/user","UserController");
});
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

