@extends('welcome')

@section('content')
@if(Auth::check() && Auth::user()->is_admin)

<table class="table-stripped table table-bordered">
	<thead>
		<tr>
			<th>Nom</th>
			<th>Status</th>
			<th>Actions</th>

		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
		
		<tr>
			<th>{{ $user->firstname }}</th>
			<th>
				@if($user->is_admin)
				Administrateur
				@else
				Membre
				@endif
			</th>
			<th>
				@if($user->id != 1)
				{{ Form::open(['route'=>['users.permission',$user->id],'method'=>'POST']) }}
				@if($user->is_admin)
				{{ Form::submit('Rendre Membre',['class'=>'btn btn-primary']) }}
				@else
				
				{{ Form::submit('Rendre Administrateur',['class'=>'btn btn-primary']) }}
				@endif

				{{ Form::close() }}
				{{ Form::open(['route'=>['users.delete',$user->id],'method'=>'Delete']) }}
				{{ Form::submit('X',['class'=>'btn btn-danger']) }}
				{{ Form::close() }}
				@else
				<div>GOD MODE</div>
				@endif


			</th>
		</tr>
		@endforeach
	</tbody>
</table>

@else
<div class="aler alert-danger">Page administrateur réserver</div>
@endif

@stop