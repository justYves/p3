
@extends('_master')

@section('title')
	Lorem Ipsum
@stop

@section('content')
	<h1> Lorem Ipsum </h1> 
@stop

@section('body')
        {{-- Error Message --}} 

	
    	@foreach($errors->all() as $message)
   		<div class="alert alert-danger alert-error">
        	<a href="#" class="close" data-dismiss="alert">&times;</a>
        	<strong>Error! </strong>{{ $message }}
    	</div>
    	@endforeach

	@if((!empty($_POST)))
		<?php $filledNumber = $paragraphsNumber; ?>
	@else
		<?php $filledNumber = 4; ?>
	@endif

	{{ Form::open(array('url' => '/lorem-ipsum', 'method' => 'POST')) }}
	{{ Form::label('number','# Paragraphs') }}
	{{ Form::text('number',$filledNumber); }} <small> (limit: 30) </small> <br>
	{{ Form::submit('Generate',Array('class'=>"btn btn-primary")); }} 
	{{ Form::close() }}

@stop
@section('result')
	@if((!empty($_POST)))
		<blockquote>
			<p class="text-muted"> {{implode('<p class="text-muted">', $paragraphs);}}
		</blockquote>
	@endif
@stop