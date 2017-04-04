@extends('welcome')

@section('content')

<div class="container">

	<div class="blog-header">
		<h1 class="blog-title">MonBlog</h1>
		<p class="lead blog-description">Voici la listes des article ! bonne lecture :)</p>
	</div>

	<div class="row">
		<div class="col-sm-8 blog-main">


			
			

			@foreach($datePost as $date)
			@if($date->publier == 1 ) 
			<div class="blog-post">
				<h2 class="blog-post-title">{{ $date->name }}</h2>
				<p class="blog-post-meta">{{ $date->created_at}} by <a href="{{ URL::route('posts.show',$date->slug)}}">{{ $user->firstname}}</a></p>
			</div>

			<br>
			@endif
			@endforeach




		</div>
	</div>
	{{$datePost->Links()}}
</div>



@stop