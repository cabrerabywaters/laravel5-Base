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

    /*
    |--------------------------------------------------------------------------
    | Countries
    |--------------------------------------------------------------------------

    */



    Route::get('owner/{owner}/dashboard', [
        'as'   => 'owner.dashboard',
        'uses' => 'RedirectController@dashboard'
    ]);


    /*
    |--------------------------------------------------------------------------
    | Company
    |--------------------------------------------------------------------------

    */

    Route::get('company/index', [
        'as'   => 'companies.index',
        'uses' => 'CompaniesController@indexView'
    ]);

    Route::get('company/{company}/dashboard', [
        'as'   => 'company.dashboard',
        'uses' => 'RedirectController@dashboard'
    ]);

    Route::resource('company', 'CompaniesController');


    /*
    |--------------------------------------------------------------------------
    | Users
    |--------------------------------------------------------------------------
    */
    Route::get('user/{user}/profile', [
        'as'   => 'user.profile',
        'uses' => 'UsersController@profile'
    ]);

    Route::resource('user', 'UsersController');


    /*
    |--------------------------------------------------------------------------
    | Home Pages
    |--------------------------------------------------------------------------
    |
    | This routes are for the Corporate Home Page.
    | Just some regular static pages.
    */

    Route::get('/', 'PagesController@home');
    Route::get('/about', 'PagesController@about');

    /*
    |--------------------------------------------------------------------------
    | Auth
    |--------------------------------------------------------------------------
    |
    |   Authentication Routes
    */


//When a user logs in, it has to be redirect depending on his Roles.
    Route::get('auth/redirect', 'RedirectController@login');

// Authentication routes...
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');
