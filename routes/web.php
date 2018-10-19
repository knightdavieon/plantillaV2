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

Route::get('/', function () {
    return view('index');
<<<<<<< HEAD


=======
>>>>>>> 017994c9946650afaaf739dc4b79a5b8761fa950
});

Route::get('/samplepage', function () {
  
     return "sample page";

   
});
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');