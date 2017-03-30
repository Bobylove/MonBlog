@extends('welcome')

@section('content')
@if(Auth::check())
@if(Auth::user()->is_admin)
<h1>Liste des Articles</h1>&nbsp;<a class="btn btn-success" href="{{ URL::route('posts.create')}}">Créer un article</a>

<table class="table table-stripped table-bordered">
	
<thead>
<tr>
	<th>ID</th>
	<th>Nom</th>
	<th>Actions</th
	>
</tr>
</thead>
<tbody>
	@foreach($posts as $post)

	<tr>
		<th>{{ $post->id}}</th>
		<th>{{ $post->name}}</th>
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
@endif
@else
<div class="aler alert-danger">Page administrateur réserver</div>
@endif





@stop