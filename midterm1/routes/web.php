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

Route::get("/", "BooksController@index")->name("index");

Route::get("/admin", "BooksController@adminindex")->name("adminindex");


Route::get("/admin/create", "BooksController@create")->name("admincreate");

Route::post("/admin/store", "BooksController@store")->name("adminstore");

Route::post("/admin/destroy", "BooksController@destroy")->name("admindestroy");

Route::get("/show/{id}","BooksController@show")->name("show");
