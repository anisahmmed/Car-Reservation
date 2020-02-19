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

//car category form
Route::get('/dashboard/car-category/index','CarCategoryController@index')->name('car_category_index');
//Category Insert
Route::post('/dashboard/car-category/insert','CarCategoryController@insert')->name('category_insert');

//Car category view
Route::get('/dashboard/car-category-info','CarCategoryController@car_category_info')->name('car_category_info');














Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
