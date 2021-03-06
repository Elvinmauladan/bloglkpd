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
Route::resource('blog', BlogController::class);
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
 });
 
 
 Auth::routes();
 Route::get('/home', 'HomeController@index')->name('home');
        
 
 Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');
 Route::get('hubin','HubinController@index')->name('hubin')->middleware(['checkRole:admin,hubin']);
 Route::get('siswa', function () { return view('siswa'); });