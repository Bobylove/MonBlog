@extends('welcome')

@section('content')


	{{ Form::open(['route'=>'users.store']) }}

	<div class="form-group">
		{{ Form::label('email','Email') }}
		{{ Form::email('email','',['class'=>'form-control']) }}

		@if($errors->first('email'))
		<div class="alert alert-danger">{{ $errors->first('email')}}</div>
		@endif
	</div>


	<div class="form-group">
		{{ Form::label('password','Mot de passe') }}
		{{ Form::password('password',['class'=>'form-control']) }}

		@if($errors->first('password'))
		<div class="alert alert-danger">{{ $errors->first('password')}}</div>
		@endif


	<div class="form-group">
		{{ Form::label('password_confirm','Confirmer Mot de passe') }}
		{{ Form::password('password_confirm',['class'=>'form-control']) }}

		@if($errors->first('password_confirm'))
		<div class="alert alert-danger">{{ $errors->first('password_confirm')}}</div>
		@endif
	</div>

	{{ Form::submit('S\'enregistrer',['class'=>'btn btn-primary']) }}

	{{ Form::close() }}
</div>


@stop