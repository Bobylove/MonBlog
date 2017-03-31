@extends('welcome')

@section('content')


{{ Form::open(['route'=>'users.check']) }}

<div class="form-group">
	{{ Form::text('email','',['placeholder'=>'email','class'=>'form-control']) }}

	@if($errors->first('email'))
	<div class="alert alert-danger">{{ $errors->first('email') }}</div>
	@endif
</div>
<div class="form-group">
	{{ Form::password('password',['class'=>'form-control']) }}
	@if($errors->first('password'))
	<div class="alert alert-danger">{{ $errors->first('password') }}</div>
	@endif
</div>
<div class="form-group">
	{{ Form::checkbox('remember','remember',false) }}
	{{ Form::label('remember','Se Souvenir de moi')}}
</div>
{{ Form::submit('Se connecter',['class'=>'btn btn-primary']) }}
{{ Form::close()}}




@stop