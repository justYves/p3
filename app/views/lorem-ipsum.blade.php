
@extends('_master')

@section('title')
	Lorem Ipsum
@stop

@section('content')
	<h1> Lorem Ipsum </h1> 
@stop

@section('body')
	{{ Form::open(array('url' => '/lorem-ipsum', 'method' => 'POST')) }}
		{{ Form::label('number','Paragraphs') }}
		{{ Form::text('number',4); }}
		{{ Form::submit('Generate'); }}
	{{ Form::close() }}
@stop
@section('result')

@stop