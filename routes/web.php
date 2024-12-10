<?php
use App\Routes\Route;

use App\Controllers\HomeController;
use App\Controllers\ClientController;
use App\Controllers\AchatController;

Route::get('/home', 'HomeController@index');
Route::get('/about', 'HomeController@about');

Route::get('/clients', 'ClientController@index');
Route::get('/achat/index', 'ClientController@achats');
// Route::get('/client/listeAchats', 'ClientController@index');
// Route::get('/client/achats', 'AchatController@achats');
Route::get('/listeAchats', 'ReservationController@listeAchats');
// Route::get('/client/show', 'ClientController@show');
Route::get('/client/create', 'ClientController@create');
// Route::post('/client/create', 'ClientController@store');
// Route::get('/client/edit', 'ClientController@edit');
// Route::post('/client/delete', 'ClientController@delete');

Route::dispatch();

?>