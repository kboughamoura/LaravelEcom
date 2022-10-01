<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

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

Auth::routes();

//GUEST
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/shop', 'App\Http\Controllers\GuestController@shop');
Route::get('/products/{category}/list', 'App\Http\Controllers\GuestController@shopCat');
Route::get('/', 'App\Http\Controllers\GuestController@home');
Route::get('/product/details/{id}', 'App\Http\Controllers\GuestController@ProductDetails');
Route::Post('/search', 'App\Http\Controllers\GuestController@search');



//CLIENT
Route::get('/client/dashboard','App\Http\Controllers\ClientController@dashboard')->middleware('auth');
Route::post('/client/review/add','App\Http\Controllers\ClientController@AddReview')->middleware('auth');


//COMMAND
Route::get('/client/cart','App\Http\Controllers\CommandController@cart')->middleware('auth');
Route::post('/client/command/add','App\Http\Controllers\CommandController@AddCommand')->middleware('auth');
Route::get('/client/command/delete{id}','App\Http\Controllers\CommandController@DestroyLCommand')->middleware('auth');

// ADMIN
Route::get('/admin/profile','App\Http\Controllers\AdminController@Profile')->middleware('auth','admin');
Route::post('/admin/profile/update','App\Http\Controllers\AdminController@UpdateProfile')->middleware('auth','admin');
Route::get('/admin/dashboard','App\Http\Controllers\AdminController@dashboard')->middleware('auth','admin');
Route::get('/admin/users/list-users','App\Http\Controllers\ProductController@ListUsers')->middleware('auth','admin');


//CATEGORY
Route::get('/admin/category/list-categories','App\Http\Controllers\CategoryController@ListCategories')->middleware('auth','admin');
Route::post('/admin/category/add','App\Http\Controllers\CategoryController@AddCategory')->middleware('auth','admin');
Route::get('/category/delete/{id}','App\Http\Controllers\CategoryController@DeleteCategory')->middleware('auth','admin');
Route::post('/admin/category/update','App\Http\Controllers\CategoryController@UpdateCategory')->middleware('auth','admin');


//PRODUCT
Route::get('/admin/product/list-products','App\Http\Controllers\ProductController@Listproducts')->middleware('auth','admin');
Route::post('/admin/product/add','App\Http\Controllers\ProductController@Addproduct')->middleware('auth','admin');
Route::get('/product/delete/{id}','App\Http\Controllers\ProductController@Deleteproduct')->middleware('auth','admin');
Route::post('/admin/product/update','App\Http\Controllers\ProductController@Updateproduct')->middleware('auth','admin');


