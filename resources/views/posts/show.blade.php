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

@if($post->counts_comment > 0)
<h3>Les Commentaires</h3>
@foreach($comments as $comment)
<h4>Commantaire posté par {{ $comment->user->firstname }} le <h5>{{ $comment->created_at }}</h5></h4>
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

@stop
