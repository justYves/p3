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
	return View::make('index');
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

	return View::make('lorem-ipsum')
		-> with ('paragraphs',$paragraphs)
		-> with ('paragraphsNumber',$paragraphsNumber);
});

//User-Generator Page
Route::get('/user-generator',function()
{
	return View::make('user-generator');
});



//Process form for User-Generator Page
use RandomUser\Generator;
use RandomUser\User;

Route::post('/user-generator',function()
{
	$usersNumber = Input::get('number');
	$address = Input::get('address');
	$phoneNumber = Input::get('phoneNumber');
	$dateOfBirth = Input::get('dateOfBirth');

		return View::make('user-generator')
			-> with ('usersNumber',$usersNumber)
			-> with ('address',$address)
			-> with ('phoneNumber',$phoneNumber)
			-> with ('dateOfBirth',$dateOfBirth);			
});