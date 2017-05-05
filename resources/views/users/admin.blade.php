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
                                              .....'',;;::cccllllllllllllcccc:::;;,,,''...'',,'..
                            ..';cldkO00KXNNNNXXXKK000OOkkkkkxxxxxddoooddddddxxxxkkkkOO0XXKx:.
                      .':ok0KXXXNXK0kxolc:;;,,,,,,,,,,,;;,,,''''''',,''..              .'lOXKd'
                 .,lx00Oxl:,'............''''''...................    ...,;;'.             .oKXd.
              .ckKKkc'...'',:::;,'.........'',;;::::;,'..........'',;;;,'.. .';;'.           'kNKc.
           .:kXXk:.    ..       ..................          .............,:c:'...;:'.         .dNNx.
          :0NKd,          .....''',,,,''..               ',...........',,,'',,::,...,,.        .dNNx.
         .xXd.         .:;'..         ..,'             .;,.               ...,,'';;'. ...       .oNNo
         .0K.         .;.              ;'              ';                      .'...'.           .oXX:
        .oNO.         .                 ,.              .     ..',::ccc:;,..     ..                lXX:
       .dNX:               ......       ;.                'cxOKK0OXWWWWWWWNX0kc.                    :KXd.
     .l0N0;             ;d0KKKKKXK0ko:...              .l0X0xc,...lXWWWWWWWWKO0Kx'                   ,ONKo.
   .lKNKl...'......'. .dXWN0kkk0NWWWWWN0o.            :KN0;.  .,cokXWWNNNNWNKkxONK: .,:c:.      .';;;;:lk0XXx;
  :KN0l';ll:'.         .,:lodxxkO00KXNWWWX000k.       oXNx;:okKX0kdl:::;'',;coxkkd, ...'. ...'''.......',:lxKO:.
 oNNk,;c,'',.                      ...;xNNOc,.         ,d0X0xc,.     .dOd,           ..;dOKXK00000Ox:.   ..''dKO,
'KW0,:,.,:..,oxkkkdl;'.                'KK'              ..           .dXX0o:'....,:oOXNN0d;.'. ..,lOKd.   .. ;KXl.
;XNd,;  ;. l00kxoooxKXKx:..ld:         ;KK'                             .:dkO000000Okxl;.   c0;      :KK;   .  ;XXc
'XXdc.  :. ..    '' 'kNNNKKKk,      .,dKNO.                                   ....       .'c0NO'      :X0.  ,.  xN0.
.kNOc'  ,.      .00. ..''...      .l0X0d;.             'dOkxo;...                    .;okKXK0KNXx;.   .0X:  ,.  lNX'
 ,KKdl  .c,    .dNK,            .;xXWKc.                .;:coOXO,,'.......       .,lx0XXOo;...oNWNXKk:.'KX;  '   dNX.
  :XXkc'....  .dNWXl        .';l0NXNKl.          ,lxkkkxo' .cK0.          ..;lx0XNX0xc.     ,0Nx'.','.kXo  .,  ,KNx.
   cXXd,,;:, .oXWNNKo'    .'..  .'.'dKk;        .cooollox;.xXXl     ..,cdOKXXX00NXc.      'oKWK'     ;k:  .l. ,0Nk.
    cXNx.  . ,KWX0NNNXOl'.           .o0Ooldk;            .:c;.':lxOKKK0xo:,.. ;XX:   .,lOXWWXd.      . .':,.lKXd.
     lXNo    cXWWWXooNWNXKko;'..       .lk0x;       ...,:ldk0KXNNOo:,..       ,OWNOxO0KXXNWNO,        ....'l0Xk,
     .dNK.   oNWWNo.cXK;;oOXNNXK0kxdolllllooooddxk00KKKK0kdoc:c0No        .'ckXWWWNXkc,;kNKl.          .,kXXk,
      'KXc  .dNWWX;.xNk.  .kNO::lodxkOXWN0OkxdlcxNKl,..        oN0'..,:ox0XNWWNNWXo.  ,ONO'           .o0Xk;
      .ONo    oNWWN0xXWK, .oNKc       .ONx.      ;X0.          .:XNKKNNWWWWNKkl;kNk. .cKXo.           .ON0;
      .xNd   cNWWWWWWWWKOkKNXxl:,'...;0Xo'.....'lXK;...',:lxk0KNWWWWNNKOd:..   lXKclON0:            .xNk.
      .dXd   ;XWWWWWWWWWWWWWWWWWWNNNNNWWNNNNNNNNNWWNNNNNNWWWWWNXKNNk;..        .dNWWXd.             cXO.
      .xXo   .ONWNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNNK0ko:'..OXo          'l0NXx,              :KK,
      .OXc    :XNk0NWXKNWWWWWWWWWWWWWWWWWWWWWNNNX00NNx:'..       lXKc.     'lONN0l.              .oXK:
      .KX;    .dNKoON0;lXNkcld0NXo::cd0NNO:;,,'.. .0Xc            lXXo..'l0NNKd,.              .c0Nk,
      :XK.     .xNX0NKc.cXXl  ;KXl    .dN0.       .0No            .xNXOKNXOo,.               .l0Xk;.
     .dXk.      .lKWN0d::OWK;  lXXc    .OX:       .ONx.     . .,cdk0XNXOd;.   .'''....;c:'..;xKXx,
     .0No         .:dOKNNNWNKOxkXWXo:,,;ONk;,,,,,;c0NXOxxkO0XXNXKOdc,.  ..;::,...;lol;..:xKXOl.
     ,XX:             ..';cldxkOO0KKKXXXXXXXXXXKKKKK00Okxdol:;'..   .';::,..':llc,..'lkKXkc.
     :NX'    .     ''            ..................             .,;:;,',;ccc;'..'lkKX0d;.
     lNK.   .;      ,lc,.         ................        ..,,;;;;;;:::,....,lkKX0d:.
    .oN0.    .'.      .;ccc;,'....              ....'',;;;;;;;;;;'..   .;oOXX0d:.
    .dN0.      .;;,..       ....                ..''''''''....     .:dOKKko;.
     lNK'         ..,;::;;,'.........................           .;d0X0kc'.
     .xXO'                                                 .;oOK0x:.
      .cKKo.                                    .,:oxkkkxk0K0xc'.
        .oKKkc,.                         .';cok0XNNNX0Oxoc,.
          .;d0XX0kdlc:;,,,',,,;;:clodkO0KK0Okdl:,'..
              .,coxO0KXXXXXXXKK0OOxdoc:,..
                        ...
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