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
    Route::resource("/product","ProductController");
    Route::resource("/attributeGroup","attributeGroupController");
    Route::resource("/user","UserController");
    Route::resource("/attributeGroup","AttributeGroupController");
});



//////////////////////////////////////////////////////////////////////////////////





Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/test/{user}', function (App\User $user) {
return $user;
});