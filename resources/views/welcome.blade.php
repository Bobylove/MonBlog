<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Mon Blog</title>


</head>
<body>

    <div><h1>Mon blog en test</h1></div>

    <div class="ui three item menu">
        <a class="item" href="/home">Home</a>
        <a class="item" href="/contact">Contact</a>
        <a class="item" href="/login">Login</a>
    </div>
    <br>
    <br>
    <ul class="nav navbar-nav">
        @if(Auth::check() && Auth::user()->is_admin)
        <li><a href="{{ URL::route('home.admin')}}">Administration</a></li>
        
        @endif
        @if(Auth::check())
        <li class="pull-right"><a href="{{ URL::route('users.logout')}}">Se Déconnecter</a></li>
        
        @endif
        @if(!Auth::check())
        <li><a href="{{ URL::route('users.login')}}">Se Connecter</a></li>
        <li><a href="{{ URL::route('users.register')}}">S'enregistrer</a></li>
        @endif


    </ul>

    @if(Session::has('error'))
    <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif

    @if(Session::has('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

    @if(Auth::check())
    @if(Auth::user()->is_admin)
    <div class="alert alert-success">Vous êtes Admin</div>

    @else
    <div class="alert alert-success">Vous êtes membre</div>
    @endif

    @else
    <div class="alert alert-danger">Vous n'êtes pas authentifié</div>
    @endif
    @yield('content')


    <script
    src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
    crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js" ></script>
</body>
</html>
