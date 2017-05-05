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
				{{Form::open(['route'=>['users.permission',$user->id],'method'=>'POST']) }}
				@if($user->is_admin)
				{{ Form::submit('Rendre Membre',['class'=>'btn btn-primary']) }}
				@else
				
				{{ Form::submit('Rendre Administrateur',['class'=>'btn btn-primary'])}}
				@endif

				{{ Form::close() }}
				{{ Form::open(['route'=>['users.delete',$user->id],'meth od'=>'Delete']) }}
				{{ Form::submit('X',['class'=>'btn btn-danger']) }}
				{{ Form::close() }}
				@else
				<!-- <div><button class="btn btn-warning">Dont Touch me</button></div> -->
				<!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">
 Dont touch ME !
</button><!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel">Super Admin</h4>
     </div>
     <div class="modal-body">
       Même pas en rêve ! 
       Je garde mes super pouvoirs !
       <br>
       <br>
       ░░░░░░░░░░░░░░░░░░░░░░█████████
░░███████░░░░░░░░░░███▒▒▒▒▒▒▒▒███
░░█▒▒▒▒▒▒█░░░░░░░███▒▒▒▒▒▒▒▒▒▒▒▒▒███
░░░█▒▒▒▒▒▒█░░░░██▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒██
░░░░█▒▒▒▒▒█░░░██▒▒▒▒▒██▒▒▒▒▒▒██▒▒▒▒▒███
░░░░░█▒▒▒█░░░█▒▒▒▒▒▒████▒▒▒▒████▒▒▒▒▒▒██
░░░█████████████▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒██
░░░█▒▒▒▒▒▒▒▒▒▒▒▒█▒▒▒▒▒▒▒▒▒█▒▒▒▒▒▒▒▒▒▒▒██
░██▒▒▒▒▒▒▒▒▒▒▒▒▒█▒▒▒██▒▒▒▒▒▒▒▒▒▒██▒▒▒▒██
██▒▒▒███████████▒▒▒▒▒██▒▒▒▒▒▒▒▒██▒▒▒▒▒██
█▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒█▒▒▒▒▒▒████████▒▒▒▒▒▒▒██
██▒▒▒▒▒▒▒▒▒▒▒▒▒▒█▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒██
░█▒▒▒███████████▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒██
░██▒▒▒▒▒▒▒▒▒▒████▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒█
░░████████████░░░█████████████████


     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
   </div>
 </div>
</div>
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