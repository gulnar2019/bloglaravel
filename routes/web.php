<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//Route::get('/contact/all', 'ContactController@allData')->name('contact-data');

Route::get('/contact-data', 'ContactController@allData')->name('contact-data');

Route::get('contact/all/{id}',
 'ContactController@ShowOneMessage'
 )->name('contact-data-one');


Route::get('/all/{id}/update',
 'ContactController@updateMessage')
 ->name('contact-update');

 Route::get('/all/{id}/delete',
  'ContactController@deleteMessage')
  ->name('contact-delete');



 Route::post('/all/{id}/update',
  'ContactController@updateMessageSubmit')
  ->name('contact-update-submit');



Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');
