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

// Route::get('/', function () {
//     return view('frontend_layouts.master');
// });

Route::get('/','PagesController@home')->name('home_path');
Route::get('/about','PagesController@about')->name('about_path');
Route::get('/projects','PagesController@projects')->name('projects_path');
Route::get('/our-fleets','PagesController@fleets')->name('fleets_path');
Route::get('/careers','PagesController@career')->name('career_path');
Route::post('/career-sent','PagesController@sendCareer')->name('career_sent_path');
Route::get('/e-booking','PagesController@booking')->name('booking_path');
Route::post('/e-booking-sent','PagesController@sendBooking')->name('booking_sent_path');
Route::get('/contact','PagesController@contact')->name('contact_path');
Route::post('/contact-sent','PagesController@sendContactForm')->name('contact_sent_path');