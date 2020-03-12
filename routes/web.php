<?php

//Index
Route::get('/','HomeIndexController@index')->name('index');
 //Admin Dashboard
Route::get('/dashboard','AdminController@index')->name('admin_dashboard');


//Register Page
Route::get('/register-page','RegisterController@register_page')->name('register_page');
//Login page
Route::get('/login-page','RegisterController@login_page')->name('login_page');
//Register insert
Route::post('/user/registration','RegisterController@register')->name('register_user');



//Admin car info form
Route::get('/dashboard/car/index','CarController@index')->name('car_index');
//Car info insert
Route::post('/dashboard/car-info/insert','CarController@car_info_insert')->name('car_info_insert');
//Car information
Route::get('/dashboard/car-info','CarController@car_info')->name('car_info');

//Car deatails
Route::get('/car-detail/{id}','CarDetailController@car_detail')->name('car_detail');

//Driver Details
Route::get('/driver-detail/{id}','DriverController@driver_detail')->name('driver_detail');
//car category form
Route::get('/dashboard/car-category/index','CarCategoryController@index')->name('car_category_index');
//Category Insert
Route::post('/dashboard/car-category/insert','CarCategoryController@insert')->name('category_insert');

//Car category view
Route::get('/dashboard/car-category-info','CarCategoryController@car_category_info')->name('car_category_info');


//Driver Profile
Route::get('/dashboard/driver/profile','AdminController@driver_profile')->name('driver_profile');
//Driver Information
Route::get('/dashboard/driver-info','AdminController@driver_info')->name('driver_info');
//Edit Driver Information
Route::get('/dashboard/driver-info/edit/{id}','AdminController@driver_info_edit')->name('driver_info_edit');
//Driver insert form
Route::get('/dashboard/driver/index','AdminController@driver_index')->name('driver_index');
Route::post('/dashboard/driver/insert','AdminController@driver_insert')->name('driver_insert');



//Register Driver for car
Route::get('/dashboard/driver-register/index','RegisterDriverController@register_driver')->name('register_driver_index');
//Register Driver Insert
Route::post('/dashboard/driver-register/insert','RegisterDriverController@register_driver_insert')->name('register_driver_insert');

//Registered Driver info
Route::get('/dashboard/registered-driver-info','RegisterDriverController@register_driver_info')->name('register_driver_info');



//Reservation
Route::post('/reserve','ReservationController@reservation')->name('reservation');


//Customer Index
Route::get('/customer/index','PassengerController@passenger_index')->name('customer_index');

//single car
// Route::get('/customer/index/car/{id}','PassengerController@car_info')->name('car_info');


//Driver Index
Route::get('/driver/index-page','DriversController@driver_index')->name('driver_index_page');
//Edit Driver Info
Route::post('/driver-info/update','DriversController@driver_info_update')->name('driver_info_update');



//Stripe
Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');










Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
