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
    return view('auth/login');
});



Route::get('/faculty', function () {
    return view('faculty');
});
Route::get('/department', function () {
    return view('department');
});
Route::get('/slqf', function () {
    return view('slqf');
});

Route::get('/batch', function () {
    return view('batch');
});


Route::get('/course', function () {
    return view('course');
});

Route::get('/id_range', function () {
    return view('id_range');
});




Route::get('/std_reg_quick', function () {
    return view('StudentRegistration/std_reg_quick');
});



Route::get('/std_update_full', function () {
    return view('std_update_full');
});
Route::get('/std_edit_full', function () {
    return view('std_edit_full');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
