@extends('welcome')

@section('content')
@if(Auth::check())

<h2>Créer un article</h2>
{{ Form::open(['route'=>['posts.update',0],'method'=>'post']) }}

<div class="form-group">
	
	{{ Form::label('name','Nom :') }}
	{{ Form::text('name','',['class'=>'form-control']) }}
</div>
@if($errors->first('name'))
<p style="color: #CD3F3F">{{ $errors->first('name')}}</p>
@endif

<div class="form-group">
	{{ Form::label('content','Contenu :') }}
	{{ Form::textarea('content','',['class'=>'form-control']) }}

	@if($errors->first('content'))
	<p style="color: #CD3F3F">{{ $errors->first('content')}}</p>
	@endif
</div>

<div class="form-group">
	{{ Form::checkbox('publier') }}
	{{ Form::label('publier','Sauvegarder en brouillon')}}
</div>

{{ Form::submit('Envoyer',['class'=>'btn btn-primary']) }}



{{ Form::close() }}
@endif


@stop