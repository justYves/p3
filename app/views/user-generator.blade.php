

@extends('_master')

@section('title')
	User-Generator
@stop

@section('content')
	<h1> User Generator </h1>
@stop

@section('body')
	{{ Form::open(array('url' => '/user-generator', 'method' => 'POST')) }}
		{{ Form::label('number','How many users?') }}
		{{ Form::text('number',1); }} </br>
		{{ Form::checkbox('address','1',false) }} Address </br>
		{{ Form::checkbox('phoneNumber','1',false) }} Phone Number</br>
		{{ Form::checkbox('dateOfBirth','1',false) }} Date of Birth </br>
		{{ Form::submit('Generate'); }}
	{{ Form::close() }}
@stop

@section('result')
@stop