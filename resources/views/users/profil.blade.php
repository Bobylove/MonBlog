@extends('welcome')

@section('content')
@if(Auth::check())

<h1>Salut mon bro</h1>

<table class="table table-stripped table-bordered">
	
	<thead>
		<tr>
			<th>Prénom</th>
			<th>Nom</th>
			<th>Email</th>
			<th>Editer profil</th>
			</tr>
		</thead>
		<tbody>


			<tr>
				<th>{{ Auth::User()->firstname }}</th>
				<th>{{ Auth::User()->lastname }}</th>
				<th>{{ Auth::User()->email }}</th>
				<th>
					<a href="{{ URL::route('users.edit',Auth::User()->id)}}" class="btn btn-primary">Editer</a>&nbsp;
				</th>


			</tr>

		</tbody>

	</table>
	@else
	<div class="alert alert-danger">Créé un compte pour accéder au profil</div>
	@endif

	@stop