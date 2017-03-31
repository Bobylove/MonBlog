@extends('welcome')

@section('content')


<h1>Liste des articles</h1> 


@foreach($posts as $post)
@if($post->publier == 1)
<a href="{{ URL::route('posts.show',$post->slug)}}">
<h2>{{ $post->name }}</h2>
</a>
<br>
@endif
@endforeach
{{$posts->Links()}}

@stop