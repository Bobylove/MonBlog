@extends('welcome')

@section('content')
@if(Auth::check() && Auth::user()->is_admin)

<h2>Créer un article</h2>

@else
<div class="aler alert-danger">Page administrateur réserver</div>
@endif


@stop