@extends('welcome')

@section('content')

<h2>{{ $post->name }}</h2>
<p>Posté par : {{ $author->username}} |

	@if($post->counts_comment == 0)
	Pas de commentaire
	@elseif($post->counts_comment == 1)
	1 Commentaire
	@else
	{{ $post->counts_comment }} Commentaires
	@endif
</p>

<p>{{ $post->content }}</p>
<h3>Les Commentaires</h3>
@if($post->counts_comment == 0)
Pas encore de commentaire.
@else
@foreach($comments as $comment)
<h4>Commantaire posté par {{ $comment->user->username }}</h4>
<p>{{ $comment->content }}</p>
@endforeach
@endif 

@stop
