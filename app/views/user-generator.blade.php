

@extends('_master')

@section('title')
	User-Generator
@stop

@section('content')
	<h1> User Generator </h1>
@stop

@section('body')
@if((!empty($_POST)))
	{{ Form::open(array('url' => '/user-generator', 'method' => 'POST')) }}
		{{ Form::label('number','How many users?') }}
		{{ Form::text('number',$usersNumber); }} <br>
		{{ Form::checkbox('address','1',isset($address)) }} Address <br>
		{{ Form::checkbox('phoneNumber','1',isset($phoneNumber)) }} Phone Number<br>
		{{ Form::checkbox('dateOfBirth','1',isset($dateOfBirth)) }} Date of Birth <br>
		{{ Form::submit('Generate'); }}
	{{ Form::close() }}
@else
	{{ Form::open(array('url' => '/user-generator', 'method' => 'POST')) }}
		{{ Form::label('number','How many users?') }}
		{{ Form::text('number',1); }} <br>
		{{ Form::checkbox('address','1',false) }} Address <br>
		{{ Form::checkbox('phoneNumber','1',false) }} Phone Number<br>
		{{ Form::checkbox('dateOfBirth','1',false) }} Date of Birth <br>
		{{ Form::submit('Generate'); }}
	{{ Form::close() }}
@endif
@stop

@section('result')
	@if((!empty($_POST)))
		<?php 
		for ($i = 0; $i < $usersNumber; $i++){
			$user = Faker\Factory::create();?>
			<div class="col-md-6 col-lg-4">
				<div class="panel panel-primary">
					<div class="panel-heading"> 
					    <h3 class="panel-title"></span> {{$user->name}}<br></h3>
					</div>
					@if(!isset($address) and !isset($phoneNumber) and !isset($dateOfBirth))
					@else
						<div class="panel-body">
			   				@if(isset($address))
								<span class="glyphicon glyphicon-home"></span> 
								{{$user->streetAddress}}<br>
								<span class="glyphicon glyphicon-none"></span>
								{{$user->city}}, {{$user->stateAbbr}} {{$user->postcode}}<br>

							@endif
							@if(isset($phoneNumber))
								<span class="glyphicon glyphicon-earphone"></span> 
								{{$user->phoneNumber}}<br>
							@endif	
							@if(isset($dateOfBirth))
								<span class="glyphicon glyphicon-calendar"></span> 
								{{$user->dateTimeThisCentury->format('m/d/Y')}}<br>
							@endif
						</div>
					@endif
				</div>
			</div>


		<?php }; ?>
	@endif
@stop