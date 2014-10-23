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

//Homepage
Route::get('/', function()
{
	return View::make('hello');
});


//Loremp-Ipsum Page
Route::get('/loremp-ipsum',function()
{
	return View::make('loremp-ipsum');
});

//Process form for Loremp-Ipsum Page

Route::post('/loremp-ipsum',function()
{
	return "loremp-ipsum";
});

//User-Generator Page
Route::get('/user-generator',function()
{
	return View::make('user-generator');
});

//Process form for User-Generator Page
Route::post('/user-generator',function()
{
	return "user-generator";
});