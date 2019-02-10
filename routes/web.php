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
    Route::resource("/user","UserController");


    /*AttributeGroup*/
    Route::prefix('attributeGroup')->name('attributeGroup.')->group(function () {
        Route::get('create', "attributeGroupController@create")->name('create');
        Route::post('/', "attributeGroupController@store")->name('store');

    });
});



Route::view('amirex',"test");


//////////////////////////////////////////////////////////////////////////////////





Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/test/{user}', function (App\User $user) {
return $user;
});