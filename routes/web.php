<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'PagesController@home');
Route::get('/register', 'PagesController@register');
Route::get('/homeGuest', 'PagesController@homeGuest');
Route::get('/detail', 'PagesController@detail');

Auth::routes();

Route::get('/homeGuest', 'HomeController@index')->name('homeGuest');

Route::post('/confirm-register', 'Auth\RegisterController@create');

