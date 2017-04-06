@extends('welcome')

@section('content')

@if(Auth::check() && Auth::user()->is_admin)

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav navbar-right">



		<li><a href="{{ URL::route('posts.admin')}}">Modifier les postes</a></li>
		<li><a href="{{ URL::route('comments.admin')}}">Supprimer des commentaires</a></li>
		<li><a href="{{ URL::route('users.admin')}}">Gérer les utilisateurs</a></li>
	</ul>
</div>
</div>




@else
<div class="alert alert-danger">Page Admin only</div>
@endif

@stop