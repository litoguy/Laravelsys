<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Page', [App\Http\Controllers\PageController::class, 'index'])->name('Page');

Route::get('item-create',function(){
    return view('createitem');
});

Route::get('/vote', [App\Http\Controllers\voteController::class, 'index'])->name('vote');

// Route::get('/', 'ItemController@index')->name('items.index');
// Route::get('/items/create', 'ItemController@create')->name('items.create');
// Route::post('/items', 'ItemController@store')->name('items.store');
// Route::get('/items/{item}/edit', 'ItemController@edit')->name('items.edit');
// Route::put('/items/{item}', 'ItemController@update')->name('items.update');
// Route::delete('/items/{item}', 'ItemController@destroy')->name('items.destroy');
// Route::post('/votes', 'VoteController@store')->name('votes.store');

//Route::get('/', 'VoteController@index')->name('vote.index');
Route::get('/vote/{id}', 'VoteController@show')->name('vote.show');
Route::post('/vote/{id}', 'VoteController@store')->name('vote.store');
Route::get('/vote/{id}/results', 'VoteController@results')->name('vote.results');

