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
// Front End Route
Route::get('/', 'HomeController@index');
Route::get('/single_product/{id}', 'HomeController@single_product')->name('single.product');
Route::get('/products', 'HomeController@products')->name('products');
Route::get('/category_product/{id}', 'HomeController@category_product')->name('category.product');
Route::get('/sub_category_product/{id}', 'HomeController@sub_category_product')->name('sub_category.product');




// Back End Route
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/dashboard', 'AdminController@goDashboard')->name('dashboard');
Route::post('/admin-dashboard', 'AdminController@dashboard');
Route::resource('/category','CategoryController');
Route::resource('/product','ProductController');
Route::resource('/subcategory','SubCategoryController');
Route::get('/subcategory/destroy/{id}', 'SubcategoryController@destroy')->name('subcategory.destroy');
Route::get('/subcategory/edit/{id}', 'SubcategoryController@edit')->name('subcategory.edit');
Route::get('/product/destroy/{id}', 'ProductController@destroy')->name('product.destroy');
Route::get('/product/edit/{id}', 'ProductController@edit')->name('product.edit');
Route::post('/product/{id}', 'ProductController@update')->name('product.update');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
