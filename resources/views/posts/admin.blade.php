@extends('welcome')

@section('content')
@if(Auth::check() && Auth::user()->is_admin)
<h1>Liste des Articles</h1>&nbsp;<a class="btn btn-success" href="{{ URL::route('posts.create')}}">Créer un article</a>

<table class="table table-stripped table-bordered">
	
<thead class="thead-inverse">
<tr>
	<th>ID</th>
	<th>Nom</th>
	<th>Publier</th>
	<th>Actions</th
	>
</tr>
</thead>
<tbody>
	@foreach($posts as $post)

	<tr>
		<th>{{ $post->id}}</th>
		<th>{{ $post->name}}</th>
		<th>{{ Form::open(['route'=>['posts.publier',$post->id],'method'=>'POST']) }}
				@if($post->publier == 0)
				Cliquer pour : 
				{{ Form::submit('Publier',['class'=>'btn btn-primary']) }}

				@else
				Cliquer pour :
				{{ Form::submit('Cacher',['class'=>'btn btn-primary']) }}
				@endif

				{{ Form::close() }}
		</th>
		<th>
			<a href="{{ URL::route('posts.edit',$post->id)}}" class="btn btn-primary">Editer</a>&nbsp;
			{{ Form::open(['route'=>['posts.delete',$post->id],'method'=>'delete']) }}
				{{ Form::submit('Supprimer',['class'=>'btn btn-danger']) }}
				  {{ Form::close() }}
		</th>

	</tr>
	@endforeach
</tbody>

</table>

@else
<div class="aler alert-danger">Page administrateur réserver</div>
@endif





@stop