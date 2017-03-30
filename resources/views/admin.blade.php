@extends('welcome')

@section('content')


@if(Auth::check() && Auth::user()->is_admin)
<a href="{{ URL::route('posts.admin')}}">Modifier les postes</a>
<a href="{{ URL::route('comments.admin')}}">Supprimer des commentaires</a>
<a href="{{ URL::route('users.admin')}}">Gérer les utilisateurs</a>



@else
<div class="alert alert-danger">Page Admin only</div>
@endif

@stop