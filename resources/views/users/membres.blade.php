@extends('welcome')

@section('content')
@if(Auth::check())

<table id="myTable" class="table-stripped table table-bordered">
	<thead>
		<tr>
			<th>prénom</th>
			<th>nom</th>
			<th>email</th>
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

<br>
TEST
	<div id="example">
		

	</div>

	@stop