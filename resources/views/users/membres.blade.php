@extends('welcome')

@section('content')
@if(Auth::check())

<table class="table-stripped table table-bordered">
	<thead>
		<tr>
			<th>prénom</th>
			<th>nom</th>
			<th>email</th>
			<th>contact</th>

		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
		
		<tr>
			<th>{{ $user->firstname }}</th>
			<th>{{ $user->lastname }}</th>
			<th>{{ $user->email }}</th>
			</tr>
			@endforeach
		</tbody>
	</table>

	@else
	<div class="aler alert-danger">Page administrateur réserver</div>
	@endif


	@foreach($users as $user)
	<div id="myTable">
		{{ $user->firstname }}
		{{ $user->lastname }}
		{{ $user->email }}

	</div>
	@endforeach
	@stop