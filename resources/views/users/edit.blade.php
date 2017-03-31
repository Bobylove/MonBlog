@extends('welcome')

@section('content')
@if(Auth::check())

{{ Form::open(['route'=>['users.update',$users->id],'method'=>'post']) }}

<div class="form-group">
	
	{{ Form::label('firstname','Prénom :') }}
	{{ Form::text('firstname',$users->firstname,['class'=>'form-control']) }}
</div>
@if($errors->first('firstname'))
<p style="color: #CD3F3F">{{ $errors->first('firstname')}}</p>
@endif

<div class="form-group">
	
	{{ Form::label('lastname','Nom :') }}
	{{ Form::text('lastname',$users->lastname,['class'=>'form-control']) }}
</div>
@if($errors->first('lastname'))
<p style="color: #CD3F3F">{{ $errors->first('lastname')}}</p>
@endif

<div class="form-group">
	
	{{ Form::label('email','Email :') }}
	{{ Form::text('email',$users->email,['class'=>'form-control']) }}
</div>
@if($errors->first('email'))
<p style="color: #CD3F3F">{{ $errors->first('email')}}</p>
@endif

<div class="form-group">
	
	{{ Form::label('password','Mot de pass :') }}
	{{ Form::text('password',$users->password,['class'=>'form-control']) }}
</div>
@if($errors->first('password'))
<p style="color: #CD3F3F">{{ $errors->first('password')}}</p>
@endif

{{ Form::submit('Envoyer',['class'=>'btn btn-primary']) }}



{{ Form::close() }}

@else
<div class="aler alert-danger">Page réserver aux membres</div>
@endif


@stop