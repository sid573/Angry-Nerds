<?php


Route::get('/','PostController@blog')->name('home');

Route::get('/posts/create','PostController@create');

Route::post('/posts','PostController@store');

Route::get('/posts/{post}','PostController@show');




Route::post('/posts/{post}/comments','CommentController@store');




Route::get('/login','SessionController@create');

Route::post('login', [ 'as' => 'login', 'uses' => 'SessionController@store']);

Route::get('/logout','SessionController@destroy');






Route::get('/register','RegisterController@create');

Route::post('/register','RegisterController@store');

Route::get('/map','PostController@map');

//Route::get('/data','PostController@data');

Route::get('/guideline','PostController@gdline');

Route::get('/video','PostController@vdo');

Route::get('/data', ['middleware' => 'cors', function() {
     return view('data');
}]);