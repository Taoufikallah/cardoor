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

Route::get('admin/user' ,'UserController@index');
Route::get('admin/user/newEmail', 'UserController@newEmail')->name('newEmail');


Route::get('admin/cars', 'CarController@index')->name('admin');

Route::get('admin/cars/create/post', 'CarController@create')->name('post.create');
Route::POST('admin/cars/store/post', 'CarController@store')->name('post.store');

Route::get('admin/cars/show/post/{id}', 'CarController@show')->name('post.show');
Route::get('admin/cars/edit/post/{id}', 'CarController@edit')->name('post.edit');
Route::POST('admin/cars/update/post/{id}', 'CarController@update')->name('post.update');


Route::get('admin/booking', 'BookingController@index')->name('booking');



Route::get('admin/clients', 'ClientController@index')->name('admin');

Route::get('frontend/clients/create/post', 'ClientController@create')->name('client.create');
Route::POST('admin/clients/store/post', 'ClientController@store')->name('post.store');








/* Route::get('admin/cars/store/post', 'CarController@store')->name('post.store');
 */
Route::post('backend/cars/update', 'CarsController@update')->name('cars.update');

Route::get('backend/cars/destroy/{id}', 'CarsController@destroy');