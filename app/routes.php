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
Route::get('/lorem-ipsum',function()
{
	return View::make('lorem-ipsum');
});

//Process form for Loremp-Ipsum Page

Route::post('/lorem-ipsum',function()
{
	$paragraphsNumber = Input::get('number');
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($paragraphsNumber);

	return View::make('lorem-ipsum-result')
		-> with ('paragraphs',$paragraphs);
});

//User-Generator Page
Route::get('/user-generator',function()
{
	return View::make('user-generator');
});

use RandomUser\Generator;
use RandomUser\User;

//Process form for User-Generator Page
Route::post('/user-generator',function()
{
	$usersNumber = Input::get('number');
	
		return View::make('user-generator-result')
			-> with ('usersNumber',$usersNumber);
});