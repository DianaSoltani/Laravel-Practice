<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@home');

Route::get('/about', function(){
   return view('about');
});

Route::get('cards','CardsController@index');
Route::get('cards/{card}','CardsController@show');


Route::post('/cards/{card}/notes', 'NotesController@store');

//Allows user to edit note.
Route::get('/notes/{note}/edit', 'NotesController@edit');
//Updates note with a certain ID
Route::patch('/notes/{note}', 'NotesController@update');