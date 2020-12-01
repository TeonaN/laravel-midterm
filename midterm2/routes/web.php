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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post("/home/productsstore", "ProductsController@store")->name("productsstore");

Route::get("/home/productsedit/{id}","ProductsController@edit")->name("productsedit");

Route::get("/home/productscreate", "ProductsController@create")->name("productscreate");

Route::post("/home/productsupdate","ProductsController@update")->name("productsupdate");


Route::post("/home/productsdelete","ProductsController@destroy")->name("productsdelete");

Route::get("/home/show/{id}","ProductsController@show")->name("show");





Route::post("/categories/categoriesstore", "CategoriesController@store")->name("categoriesstore");

Route::get("/categories/categoriesedit/{id}","CategoriesController@edit")->name("categoriesedit");

Route::get("/categories/categoriescreate", "CategoriesController@create")->name("categoriescreate");

Route::post("/categories/categoriesupdate","CategoriesController@update")->name("categoriesupdate");


Route::post("/categories/categoriesdelete","CategoriesController@destroy")->name("categoriesdelete");



Route::get('/categories', 'CategoriesController@index')->name('categories');


