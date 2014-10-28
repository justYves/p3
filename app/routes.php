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
	$page = '/';
	return View::make('index')
		-> with ('page',$page);
});


//Loremp-Ipsum Page
Route::get('/lorem-ipsum',function()
{
	$page = '/lorem-ipsum';
	return View::make('lorem-ipsum')
			-> with ('page',$page);
});

//Process form for Loremp-Ipsum Page
Route::post('/lorem-ipsum',function()
{
	$paragraphsNumber = Input::get('number');
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($paragraphsNumber);
	$page = '/lorem-ipsum';

	return View::make('lorem-ipsum')
		-> with ('paragraphs',$paragraphs)
		-> with ('paragraphsNumber',$paragraphsNumber)
			-> with ('page',$page);
});

//User-Generator Page
Route::get('/user-generator',function()
{
	$page = '/user-generator';
	return View::make('user-generator')
			-> with ('page',$page);
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
	$page = '/user-generator';

		return View::make('user-generator')
			-> with ('usersNumber',$usersNumber)
			-> with ('address',$address)
			-> with ('phoneNumber',$phoneNumber)
			-> with ('dateOfBirth',$dateOfBirth)
			-> with ('page',$page);		
});