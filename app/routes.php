<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return View::make('frontpage');
});

Route::get('/chat', function()
{
    return View::make('chat');
});

Route::get('/mailbox', function()
{
    return View::make('mailbox');
});

Route::get('/profile', function()
{
    return View::make('profile');
});

Route::get('/searchresult', function()
{
    return View::make('searchresult');
});
