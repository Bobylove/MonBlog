@extends('welcome')

@section('content')


<div class="container">
<h2>{{ $post->name }}</h2>
<p>Posté par : {{ $author->firstname}} |

	@if($post->counts_comment == 0)
	Pas de commentaire
	@elseif($post->counts_comment == 1)
	1 Commentaire
	@else
	{{ $post->counts_comment }} Commentaires
	@endif
</p>

<p>{{ $post->content }}</p>

@if($post->counts_comment > 0)
<h3>Les Commentaires</h3>
@foreach($comments as $comment)
<p>Commantaire posté par <strong>{{ $comment->user->firstname }}</strong> le <i>{{ $comment->created_at->format('F-d-Y à H:i:s') }}</i></p>
<p>{{ $comment->content }}</p>
@endforeach

@else
Pas encore de commentaire

@endif 
@if(Auth::check())
{{ Form::open(['route'=>['comments.create',$post->id],'method'=>'POST'])}}

<div class="form-group">
	{{ Form::text('comment','',['class'=>'form-control']) }}
</div>

{{ Form::submit('Envoyer',['class'=>'btn btn-primary']) }}

{{ Form::close() }}
@else
Pour poster un commentaire <a href="{{ URL::route('users.login') }}">Connecter vous</a>
@endif
</div>
@stop
