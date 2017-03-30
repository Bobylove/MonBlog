@extends('welcome')

@section('content')

{{ Form::open() }}

<div class="form-group">
	
	{{ Form::label('name','Nom :') }}
	{{ Form::text('name',$post->name,['class'=>'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('content','Contenu :') }}
	{{ Form::textarea('content',$post->content,['class'=>'form-control']) }}

</div>

{{ Form::submit('Envoyer',['class'=>'btn btn-primary']) }}



{{ Form::close() }}


@stop