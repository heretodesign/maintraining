<?php


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/welcome', function () {
    return view('welcome');
});

//----------- ENROLL  --------------------//
// Route::get('/', 'EnrollController@create');
// Route::get('enroll.show', 'EnrollController@show');
// Route::post('enrolls', 'EnrollController@store');
// Route::get('enroll/{enroll}', 'EnrollController@show');
Route::resource('enrolls','EnrollController');


//----------- PagesController --------------------//
Route::get('/ibd', 'PagesController@getIbd');
Route::get('/talent', 'PagesController@getTalent');

Route::get('/excell', 'PagesController@getExcell');
Route::get('/excellcontent', 'PagesController@getExcellContent');

Route::get('/powerpoint', 'PagesController@getPowerpoint');
Route::get('/powerpoint-content', 'PagesController@getPowerpointContent');

Route::get('/storytelling', 'PagesController@getStorytelling');
Route::get('/storytelling-content', 'PagesController@getStorytellingContent');

Route::get('/payment', 'PagesController@getPayment');

Route::get('/about', 'PagesController@getAbout')->middleware('auth');
Route::get('/contact', 'PagesController@getContact')->middleware('auth');
Route::get('/training', 'PagesController@getTraining')->middleware('auth');
Route::get('/trainers', 'PagesController@getTrainers')->middleware('auth');


//============ FORMS ============================//

//----------- Contact Us  --------------------//
 Route::resource('contacts', 'ContactController');

//----------- Excel  --------------------//
Route::resource('excels','ExcelController');

//----------- Powerpoint  --------------------//
Route::resource('powerpoints','PowerpointController');

//----------- Data Visual  --------------------//
 Route::resource('datavs', 'DatavController');


 Route::resource('ibds', 'IbdController');
 Route::resource('talents', 'TalentController');




