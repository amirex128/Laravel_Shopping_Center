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
    
     /*User*/
    Route::resource("/user","UserController")->only(['index','create','store']);
    
	/*Category*/
	Route::resource('/category','CategoryController');
    
     /*AttributeGroup*/
	   Route::prefix('attributeGroup')->name('attributeGroup.')->group(function () {
        Route::get('create', "attributeGroupController@create")->name('create');
        Route::post('/', "attributeGroupController@store")->name('store');
        Route::delete('{attributeGroup}','attributeGroupController@destroy')->name('destroy');

    });
     /*Attribute*/
    Route::prefix('attribute')->name('attribute.')->group(function (){
        Route::get('create/{attributeGroup}', 'AttributeController@create')->name('create');
        Route::post('/{attributeGroup}', 'AttributeController@store')->name('store');
        Route::delete('{attribute}', 'AttributeController@destroy')->name('destroy');
    });

     /*AttributeItem*/
    Route::prefix('attributeItem')->name('attributeItem.')->group(function (){
       Route::get('create/{attribute}','attributeItemController@create')->name('create');
       Route::post('store/{attribute}','attributeItemController@store')->name('store');
        Route::get('{attributeItem}/edit','attributeItemController@edit')->name('edit');
        Route::patch('update','attributeItemController@update')->name('update');
        Route::patch('destroy/{attributeItem}','attributeItemController@destroy')->name('destroy');

    });
});



Route::view('amirex',"test");


//////////////////////////////////////////////////////////////////////////////////





Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/test/{user}', function (App\User $user) {
return $user;
});