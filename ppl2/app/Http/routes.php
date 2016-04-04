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

Route::get('/', function () {
    return view('app_template');
});

Route::get('pendidikan-formal',  function () {
    return view('pages.formPendidikan');
});

Route::get('pendidikan-formal/all','PendFormalController@getAll');

Route::delete('pendidikan-formal/delete/{id}', 'PendFormalController@delete');

Route::post('pendidikan-formal/{id}/update', 'PendFormalController@update');

Route::get('pendidikan-formal/{id}/edit','PendFormalController@edit');

Route::get('pendidikan-formal/{id}/delete','PendFormalController@getPendidikan');

Route::get('pendidikan-formal/{nip}','PendFormalController@getPendidikan');

Route::post('pendidikan-formal/add', 'PendFormalController@store');