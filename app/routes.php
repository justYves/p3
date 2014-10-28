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
	// Fetch all request data.
	$data=Input::all();

	//Build the validation constraint set
	$rules = array(
		'number'=>'required|numeric|min:0|max:30'
	);

	//Create custom message array
	$messages = array(
		'required' => 'No values were submitted',
		'numeric' => 'The value submitted must be numeric',
		'min' => 'The value must be positive',
		'max' => 'The value exeeds the allowed limit. Please input a value less than or equal to 30',
	);

	//Create a new validator instance
	$validator= Validator::make($data,$rules,$messages);

	//Proceed with Generating the lorem ipsum
	if($validator->passes()){

		$paragraphsNumber = Input::get('number');
		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($paragraphsNumber);
		$page = '/lorem-ipsum';

		return View::make('lorem-ipsum')
			-> with ('paragraphs',$paragraphs)
			-> with ('paragraphsNumber',$paragraphsNumber)
			-> with ('page',$page);
	}

	$errors = $validator->messages();

	return Redirect::to('/lorem-ipsum')
		-> withErrors($validator);
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

	// Fetch all request data.
	$data=Input::all();

	//Build the validation constraint set
	$rules = array(
		'number'=>'required|numeric|min:0|max:99'
	);

	//Create custom message array
	$messages = array(
		'required' => 'No values were submitted',
		'numeric' => 'The value submitted must be numeric',
		'min' => 'The value must be positive',
		'max' => 'The value exeeds allowed limit. Please input a value less than or equal to 99',
	);

	//Create a new validator instance
	$validator= Validator::make($data,$rules,$messages);

	//Proceed with Generating the lorem ipsum
	if($validator->passes()){

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

	}	

	$errors = $validator->messages();

	return Redirect::to('/user-generator')
		-> withErrors($validator);
});