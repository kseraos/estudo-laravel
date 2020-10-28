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
    return view('welcome');
});


/*Route::get('pessoas', 'PessoaControle@index');
Route::get('pessoas/create', 'PessoaControle@create');
Route::post('pessoas', 'PessoaControle@store');
Route::get('pessoas/{pessoa}/edit', 'PessoaControle@edit');
Route::put('pessoas/{pessoa}', 'PessoaControle@update');
Route::get('pessoas/{pessoa}', 'PessoaControle@show');
Route::delete('pessoas/{pessoa}', 'PessoaControle@destroy');
*/


Route:: middleware('auth')->group(function(){
    Route::resource('pessoas', 'PessoaControle');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
