@extends('welcome')

@section('content')
<header class="intro-header" style="background-image: url('img.jpg')">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <div class="site-heading">
          <h1 class="animated wobble">Geek and Eat</h1>
          <hr class="small">
          <span class="subheading"><b>Bienvenue et Bonne lecture</b> </span>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="container" >
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			@foreach($datePost as $date)
			@if($date->publier == 1 ) 
			<div class="post-preview">
				<a href="{{ URL::route('posts.show',$date->slug)}}">
					<h2 class="post-title animated  slideInRight">{{ $date->name }}</h2>
				</h2>
			</a>
			<p class="post-meta animated  slideInLeft blog-post-meta">{{ $date->created_at->diffForHumans() }} by <a href="{{ URL::route('posts.show',$date->slug)}}">{{ $user->firstname}}</a></p>
			<hr>
			@endif
			@endforeach
		</div>
	</div>

	<ul class="pager">
		<li class="next">
			{{$datePost->Links()}}
		</li>
	</ul>



	<hr>
</div>





@stop