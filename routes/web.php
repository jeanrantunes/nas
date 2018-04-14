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
//     return view('welcome');
// });



Route::get('/', 'HomeController@index')->name('home');


//Route::get('/register', 'Auth\RegisterController@getContentDropdows');
Auth::routes();

Route::get('/register-patient', 'RegisterPatientController@index')->name('register-patient');
Route::post('/register-patient/add', 'RegisterPatientController@add');
Route::post('/outcome','OutcomePatient@setOutcome');
Route::get('/register-nas','RegisterNAS@index');
Route::get('/historic-patients', 'HistoricPatientsController@showTable');
// // Registration Routes...
// Route::get('/register', [
//     'as' => 'register',
//     'uses' => 'Auth\RegisterController@showRegistrationForm'
//   ]);
//   Route::post('/register', [
//     'as' => '',
//     'uses' => 'Auth\RegisterController@register'
//   ]);
