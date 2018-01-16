<?php
/*
 * Routes for ModuleOne
 *
 * All the routes related to the ModuleOne module define here.
 *
 */
Route::group(['prefix' => 'moduleone', 'namespace' => 'App\Modules\ModuleOne\Controllers'], function () {
	Route::get('/', 'ModuleOneController@index')->name('moduleone.index');
	Route::get('modeltest', 'ModuleOneController@modelTest')->name('moduleone.modelTest');
});