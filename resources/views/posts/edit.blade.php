@extends('welcome')

@section('content')

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


@stop