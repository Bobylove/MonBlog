@extends('welcome')

@section('content')
<marquee id="test1" scrolldelay="10" scrollamount="5" onmouseover="stop()" onmouseout="start()"><span id="test1" >Articles :
	@foreach($postSlide as $slide)
	@if($slide->publier == 1 )
	<a href="{{ URL::route('posts.show',$slide->slug)}}"> &emsp;{{ $slide->name }} </a>&emsp;
	@endif
	@endforeach
</span></marquee>
<header class="intro-header" style="background-image: url('img.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<div class="site-heading">
					<h1 class="animated wobble">Geek and Hit</h1>
					<hr class="small">
					<h2 class="subheading animated zoomIn"><b>Bienvenue et Bonne lecture</b> </h2>
				</div>
			</div>
		</div>
	</div>
</header>
<br>

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
			<p class="post-meta animated  slideInLeft blog-post-meta">{{ $date->created_at->diffForHumans() }}</p>
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