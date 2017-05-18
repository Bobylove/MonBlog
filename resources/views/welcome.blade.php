<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
  <link href="http://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <script>
    window.Laravel = {!! json_encode([
      'csrfToken' => csrf_token(),
      ]) !!};
    </script>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <title>Mon Blog</title>

  </head>
  <body>

   <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          Menu <i class="fa fa-bars"></i>
        </button>
      </div>

      
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-center">

          <li>
            <a  href="/home">Home</a>
          </li>
          @if(Auth::check())

          <li> <a  href="{{ URL::route('users.profil')}}">Mon profil</a>
          </li>
          <li> <a  href="{{ URL::route('users.membres')}}">Les Membres</a>
          </li>
          <li><a  href="{{ URL::route('users.logout')}}">Se Déconnecter</a></li>

          @endif
          @if(Auth::check() && Auth::user()->is_admin)
          <li><a href="{{ URL::route('posts.admin')}}">Modifier les postes</a></li>
          <li><a href="{{ URL::route('comments.admin')}}">Supprimer des commentaires</a></li>
          <li><a href="{{ URL::route('users.admin')}}">Gérer les utilisateurs</a></li>
          @endif
          @if(!Auth::check())
          <li><a href="{{ URL::route('users.login')}}">Se Connecter</a></li>
          <li><a  href="{{ URL::route('users.register')}}">S'enregistrer</a></li>
          @endif
        </ul>
      </div>
      
    </div>
    
  </nav>



  @if(Session::has('error'))
  <div class="alert alert-danger ">{{ Session::get('error') }}</div>
  @endif

  @if(Session::has('success'))
  <div class="alert alert-success ">{{ Session::get('success') }}</div>
  @endif


</div>


<br>

<div class="container">
  @yield('content')


</div>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <ul class="list-inline text-center">
          <li>
            <a href="https://twitter.com/Fred_simplon2">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
          <li>
            <a href="https://www.facebook.com/frederic.delon.33">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
          <li>
            <a href="https://github.com/Bobylove">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-github fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
        </ul>
   @yield('canvas')
        <p>
          <a href="#">Back to top</a>
        </p>
        <p class="copyright text-muted">Copyright &copy; Mon Blog 2017</p>
      </div>
    </div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
<script src="http://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="js/jquery.tagcanvas.min.js" type="text/javascript"></script>

<script src="{{ mix('js/app.js') }}" ></script>
</body>
</html>
