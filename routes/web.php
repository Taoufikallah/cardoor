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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/cars', 'PagesController@cars');
Route::get('/contact', 'PagesController@contact');





Auth::routes();

Route::group(['middleware' => 'auth'], function(){

    Route::get('/admin', function(){

        return view('admin');

    })->name('admin');;

    Route::get('/admin', function(){

        return view('admin/admin');

    })->name('admin');
});
/* Route::get('/admin', 'HomeController@index'->('home');
 */

 // The All Route for Users
Route::get('admin/user' ,'UserController@index');
Route::get('admin/user/newEmail', 'UserController@newEmail')->name('newEmail');

// The All Route for Cars
Route::get('admin/cars', 'CarController@index')->name('admin');
Route::get('admin/cars/create/post', 'CarController@create')->name('post.create');
Route::POST('admin/cars/store/post', 'CarController@store')->name('post.store');
Route::get('admin/cars/show/post/{id}', 'CarController@show')->name('post.show');
Route::get('admin/cars/edit/post/{id}', 'CarController@edit')->name('post.edit');
Route::POST('admin/cars/update/post/{id}', 'CarController@update')->name('post.update');
Route::POST('admin/cars/delete/post/{id}', 'CarController@destroy')->name('post.delete');

// The All Route for brands
Route::get('admin/brands', 'BrandController@index')->name('admin');
Route::get('admin/brands/create/brand', 'BrandController@create')->name('brand.create');
Route::POST('admin/brands/store/brand', 'BrandController@store')->name('brand.store');
Route::get('admin/brands/show/brand/{id}', 'BrandController@show')->name('brand.show');
Route::get('admin/brands/edit/brand/{id}', 'BrandController@edit')->name('brand.edit');
Route::POST('admin/brands/update/brand/{id}', 'BrandController@update')->name('brand.update');
Route::POST('admin/brands/delete/brand/{id}', 'BrandController@destroy')->name('brand.delete');


// The All Route for Booking
Route::get('admin/booking', 'BookingController@index')->name('booking');


// The All Route for Clients
/* Route::get('admin/clients', 'ClientController@index')->name('admin');

Route::get('frontend/clients/create/post', 'ClientController@create')->name('client.create');
Route::POST('admin/clients/store/post', 'ClientController@store')->name('post.store');
 */







/* Route::get('admin/cars/store/post', 'CarController@store')->name('post.store');
 */
Route::post('backend/cars/update', 'CarsController@update')->name('cars.update');

Route::get('backend/cars/destroy/{id}', 'CarsController@destroy');