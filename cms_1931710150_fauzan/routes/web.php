  
<?php

// Route::get('/hello', 'WelcomeController@hello');

Route::get('/', 'HomeController');
Route::get('/dasboard', 'DasboardController');

//Route::get('/dasboard', 'HomeController');
//About Page
Route::get('/about', 'AboutController');
Route::get('/about/edit/{id}', 'AboutController@edit');
Route::post('/updateabout/{id}', 'AboutController@update');
Route::get('/manageabout', 'AboutController@manage')->name('manage');

//Page Guide
Route::get('/guide', 'GuideController');

//Page Contact
Route::get('/contact', 'ContactController');
Route::post('/send', 'ContactController@send');
Route::get('/message/delete/{id}', 'ContactController@delete');
Route::get('/message', 'ContactController@manageMes')->name('manageMes');

//Page Article
Route::get('/article/{id}', 'ArticleController'); 
Route::get('/manage', 'ArticleController@manage')->name('manage');
Route::get('/manage/add', 'ArticleController@add');
Route::post('/create', 'ArticleController@create');
Route::get('/manage/edit/{id}', 'ArticleController@edit');
Route::post('/update/{id}', 'ArticleController@update');
Route::get('/manage/delete/{id}', 'ArticleController@delete');

//Page Me
Route::get('/me', 'MeController');
Route::get('/me/edit/{id}', 'MeController@edit');
Route::post('/me/update/{id}', 'MeController@update');

//Page Purchase
Route::get('/purchase', 'BuyController');

Auth::routes();

Route::get('/home', 'HomeController')->name('home');
