
@extends('_master')

@section('title')
	Lorem Ipsum
@stop

@section('content')
	<h1> Lorem Ipsum </h1> 
@stop

@section('body')
	@if((!empty($_POST)))
		{{ Form::open(array('url' => '/lorem-ipsum', 'method' => 'POST')) }}
			{{ Form::label('number','Paragraphs') }}
			{{ Form::text('number',$paragraphsNumber); }}
			{{ Form::submit('Generate'); }}
		{{ Form::close() }}
	@else
		{{ Form::open(array('url' => '/lorem-ipsum', 'method' => 'POST')) }}
			{{ Form::label('number','Paragraphs') }}
			{{ Form::text('number',4); }}
			{{ Form::submit('Generate'); }}
		{{ Form::close() }}
	@endif
@stop
@section('result')
	@if((!empty($_POST)))
		<blockquote>
			<p class="text-muted"> {{implode('<p class="text-muted">', $paragraphs);}}
		</blockquote>
	@endif
@stop