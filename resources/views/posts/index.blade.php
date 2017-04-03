@extends('welcome')

@section('content')

<div class="container">

	<div class="blog-header">
	<h1 class="blog-title">MonBlog</h1>
		<p class="lead blog-description">Voici la listes des article ! bonne lecture :)</p>
	</div>

	<div class="row">
		<div class="col-sm-8 blog-main">


			@foreach($posts as $post)
			@if($post->publier == 1)
			<div class="blog-post">
				<h2 class="blog-post-title">{{ $post->name }}</h2>
				<p class="blog-post-meta">{{ $post->created_at}} by <a href="{{ URL::route('posts.show',$post->slug)}}">ME test</a></p>
			</div>

			<br>
			@endif
			@endforeach
		</div>
	</div>
{{$posts->Links()}}
</div>



@stop