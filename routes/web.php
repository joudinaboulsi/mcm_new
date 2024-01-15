<?php

/*
|--------------------------------------------------------------------------
| Web Routes Frontend Pages
|--------------------------------------------------------------------------

*/

Route::get('/','PagesController@home')->name('home_path');
Route::get('/about','PagesController@about')->name('about_path');
Route::get('/projects','PagesController@projects')->name('projects_path');
Route::get('/our-fleets','PagesController@fleets')->name('fleets_path');
Route::get('/careers','PagesController@career')->name('career_path');
Route::post('/career-sent','PagesController@getCareerForm')->name('career_sent_path');
Route::get('/contact','PagesController@contact')->name('contact_path');
Route::post('/contact-sent','PagesController@getContactForm')->name('contact_sent_path');