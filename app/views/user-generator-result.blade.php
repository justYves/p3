@extends('_master')

@section('title')
	User-Generator
@stop

@section('content')
	<h1> User Generator </h1>
@stop

@section('body')
@stop

@section('result')
	<?php 
	for ($i = 0; $i < $usersNumber; $i++){
		$user = Faker\Factory::create();?>
		<div class="col-md-4">
			<h2><small>{{$user->name}}</small></h2> </br>
			@if(isset($address))
				{{$user->address}}</br>
			@endif
			@if(isset($phoneNumber))
				{{$user->phoneNumber}}</br>
			@endif	
			@if(isset($dateofBirth))
				{{$user->dateTimeThisCentury->format('m/d/Y')}}</br>
			@endif
		</div>
	<?php }; ?>
@stop