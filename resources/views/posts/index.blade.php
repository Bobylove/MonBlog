@extends('welcome')

@section('content')

<h1>index post ?</h1>


@foreach($posts as $post)

<a href="{{ URL::route('posts.show',$post->slug)}}">
<h2>{{ $post->name }}</h2>
</a>
<br>
@endforeach
{{$posts->Links()}}
@stop