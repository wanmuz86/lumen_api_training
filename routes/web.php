<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->group(['prefix' => 'api/v1','namespace' => '\App\Http\Controllers'], function($app)
{
	$app->post('places','PlaceController@createPlace');
 
	$app->put('place/{id}','PlaceController@updatePlace');
 	 
	$app->delete('place/{id}','PlaceController@deletePlace');
 
	$app->get('places','PlaceController@index');

	$app->get('places/{id}/products','ProductController@index');

	$app->post('places/{id}/products','ProductController@createProduct');

	$app->get('places/{id}/reviews','ReviewController@index');

	$app->post('places/{id}/reviews','ReviewController@createReview');
});