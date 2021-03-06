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
// The All Route for Pages
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/cars', 'PagesController@car');
Route::get('/booking', 'Frontend\BookingController@index');

Route::get('/login2', 'PagesController@login');
Route::get('/registerr', 'PagesController@registerr');
Route::get('/succes', 'PagesController@succes');

// The All Route for Cars
Route::get('/cars/{id}', 'PagesController@show')->name('frontend.post.show');
Route::POST('cars/store/post', 'PagesController@store')->name('post.store');
/* Route::get('/dashboard', 'CarfController@index');
 */

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::prefix('cd-admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('cd.admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('cd.admin.login.submit');
    Route::get('/', 'AdminController@index')->name('cd.admin.dashboard');
});




 // The All Route for Users
Route::get('admin/user' ,'UserController@index');

Route::get('admin/user/newEmail', 'UserController@newEmail')->name('newEmail');
// The All Route for Cars
Route::get('cd-admin/cars', 'CarController@index')->name('admin');
Route::get('cd-admin/cars/create/post', 'CarController@create')->name('post.create');
Route::POST('cd-admin/cars/store/post', 'CarController@store')->name('post.store');
Route::get('cd-admin/cars/show/post/{id}', 'CarController@show')->name('post.show');
Route::get('cd-admin/cars/edit/post/{id}', 'CarController@edit')->name('post.edit');
Route::POST('cd-admin/cars/update/post/{id}', 'CarController@update')->name('post.update');
Route::POST('cd-admin/cars/delete/post/{id}', 'CarController@destroy')->name('post.delete');
// The All Route for brands
Route::get('cd-admin/brands', 'BrandController@index')->name('admin/brands');
Route::get('cd-admin/brands/create/brand', 'BrandController@create')->name('brand.create');
Route::POST('cd-admin/brands/store/brand', 'BrandController@store')->name('brand.store');
Route::get('cd-admin/brands/show/brand/{id}', 'BrandController@show')->name('brand.show');
Route::get('cd-admin/brands/edit/brand/{id}', 'BrandController@edit')->name('brand.edit');
Route::POST('cd-admin/brands/update/brand/{id}', 'BrandController@update')->name('brand.update');
Route::POST('cd-admin/brands/delete/brand/{id}', 'BrandController@destroy')->name('brand.delete');

// The All Route for Booking
Route::get('cd-admin/booking', 'BookingController@index')->name('booking');
/* Route::get('admin/booking/create/booking', 'BookingController@create')->name('booking'); */
Route::POST('cd-admin/booking/store/booking', 'BookingController@store')->name('booking.store');
Route::get('cd-admin/booking/show/booking/{id}', 'BookingController@show')->name('booking.show');
Route::get('cd-admin/booking/edit/booking/{id}', 'BookingController@edit')->name('booking.edit');
Route::POST('cd-admin/booking/update/booking/{id}', 'BookingController@update')->name('booking.update');
Route::POST('cd-admin/booking/delete/booking/{id}', 'BookingController@destroy')->name('booking.delete');

// The All Route for Clients
Route::get('cd-admin/clients', 'ClientController@index')->name('admin/clients');

Route::get('frontned/pages/index', 'ClientController@create')->name('client.create');
Route::POST('frontned/pages/index', 'ClientController@store')->name('post.store');



/* Route::get('admin/cars/store/post', 'CarController@store')->name('post.store');
 */
    // Route::post('backend/cars/update', 'CarsController@update')->name('cars.update');
    // Route::get('backend/cars/destroy/{id}', 'CarsController@destroy');
// The All Route for Messages to Cardoor
Route::post('admin/message', 'MessageController@show');
Route::GET('/contact', 'MessageController@index');
Route::POST('/contact', 'MessageController@store')->name('post.store');


// The All Route for Clients
Route::get('cd-admin/clients', 'ClientController@index')->name('client');
Route::get('cd-admin/clients/create/client', 'ClientController@create')->name('client');
Route::POST('cd-admin/clients/store/client', 'ClientController@store')->name('client.store');
Route::get('cd-admin/clients/show/client/{id}', 'ClientController@show')->name('client.show');
Route::get('cd-admin/clients/edit/client/{id}', 'ClientController@edit')->name('client.edit');
Route::POST('cd-admin/clients/update/client/{id}', 'ClientController@update')->name('client.update');
Route::POST('cd-admin/clients/delete/client/{id}', 'ClientController@destroy')->name('client.delete');
