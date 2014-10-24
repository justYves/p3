@extends('_master')

@section('title')
	P3
@stop

@section('content')
	<h1> Welcome to my Project 3 Page!</h1>
@stop

@section('body')	
	<div class="row">
		<div class="col-xs-12 col-md-6">
			<p><h2>Lorem Ipsum <br><small> This is dummy text generator application. The text which has no meaning  looks very similar to real text </small></h2>
			<a class="btn btn-primary" href="/lorem-ipsum" role="button">Take me to the application!</a>
		</div>
		<div class="col-xs-12 col-md-6">
			<p><h2>User Generator <br><small> This application generates fake users. </small></h2>
			<a class="btn btn-primary" href="/user-generator" role="button">Take me to the application!</a>
		</div>
	</div>
@stop

@section('result')
@stop
