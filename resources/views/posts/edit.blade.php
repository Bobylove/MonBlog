@extends('welcome')

@section('content')
@if(Auth::check() && Auth::user()->is_admin)

{{ Form::open(['route'=>['posts.update',$post->id],'method'=>'post']) }}

<div class="form-group">
	
	{{ Form::label('name','Nom :') }}
	{{ Form::text('name',$post->name,['class'=>'form-control']) }}
</div>
@if($errors->first('name'))
<p style="color: #CD3F3F">{{ $errors->first('name')}}</p>
@endif

<div class="form-group">
	{{ Form::label('content','Contenu :') }}
	{{ Form::textarea('content',$post->content,['class'=>'form-control']) }}

	@if($errors->first('content'))
	<p style="color: #CD3F3F">{{ $errors->first('content')}}</p>
	@endif
</div>

{{ Form::submit('Envoyer',['class'=>'btn btn-primary']) }}



{{ Form::close() }}

@else
<div class="aler alert-danger">Page administrateur réserver</div>
@endif


@stop