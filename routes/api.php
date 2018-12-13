<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::group([
    'middleware' => 'api',
    'prefix' => '/auth'
], function ($router) {
    Route::post('/login', 'AuthenticateUserController@login');
    Route::post('/logout', 'AuthenticateUserController@logout');
    Route::post('/signup', 'AuthenticateUserController@signup');
    Route::post('/refresh', 'AuthenticateUserController@refresh');
    Route::post('/me', 'AuthenticateUserController@me');
});

    Route::post('/products/new', 'ProductsController@createProduct');
    Route::post('/createReview', 'ReviewsController@createReview');

    Route::get('/products', 'ProductsController@getAllProducts');

Route::group(['middleware' => 'JWT'], function($router){

    Route::get('/products/{id}', 'ProductsController@showProductAndReviews');
    Route::get('/products/{id}', 'ProductsController@showProduct');

    Route::get('/getReviews/{id}', 'ReviewsController@getReviews');
});



