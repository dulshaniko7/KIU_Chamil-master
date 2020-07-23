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

Route::prefix('slo')->group(function () {
    Route::get('/', 'SloController@index');
});


Route::get('/slo/QuickRegistrations', 'QuickRegistrationController@index');

Route::get('/slo/batch', 'BatchController@index');
Route::post('/slo/batch', 'BatchController@store');

Route::get('/slo/IdRange', 'IdRangeController@index');

Route::get('/slo/faculty', 'FacultyController@index');

Route::get('/slo/batch','BatchController@index')->name('batches.index');
Route::post('/slo/batch','BatchController@store')->name('batches.store');
Route::get('/slo/batch/{batch}','BatchController@show')->name('batches.show');

Route::get('/error', function (){
return view('error');
})->name('error');