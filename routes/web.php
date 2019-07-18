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





Auth::routes();

Route::group(['middleware' => 'auth'], function(){

    Route::get('/dashboard', function(){

        return view('dashboard');

    })->name('dashboard');;

    Route::get('/dashboard', function(){

        return view('admin/dashboard');

    })->name('dashboard');
});
/* Route::get('/admin', 'HomeController@index'->('home');
 */

Route::get('admin/user' ,'UserController@index');
Route::get('admin/user/newEmail', 'UserController@newEmail')->name('newEmail');


Route::resource('backend/cars', 'CarsController');

Route::post('backend/cars/update', 'CarsController@update')->name('cars.update');

Route::get('backend/cars/destroy/{id}', 'CarsController@destroy');