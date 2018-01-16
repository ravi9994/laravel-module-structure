<?php
/*
 * Routes for ModuleOne
 *
 * All the routes related to the ModuleOne module define here.
 *
 */
Route::group(['prefix' => 'moduleone', 'namespace' => 'App\Modules\ModuleOne\Controllers'], function () {
	Route::get('/', ['as' => 'moduleone.index', 'uses' => 'ModuleOneController@index']);
	Route::get('modeltest', ['as' => 'moduleone.modelTest', 'uses' => 'ModuleOneController@modelTest']);
});