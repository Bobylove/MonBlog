<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/app.css">

  <title>Mon Blog</title>


</head>
<body>


  <div class="blog-masthead">
    <div class="container">
      <nav class="blog-nav">
        <a class="blog-nav-item active" href="/home">Home</a>
        @if(Auth::check() && Auth::user()->is_admin)
        <a class="blog-nav-item" href="{{ URL::route('home.admin')}}">Administration</a>
        @endif
        @if(Auth::check())

        <a class="blog-nav-item" href="{{ URL::route('users.profil')}}">Mon profil</a>
        <a class="blog-nav-item" href="{{ URL::route('users.logout')}}">Se Déconnecter</a>

        @endif
        @if(!Auth::check())
        <a class="blog-nav-item" href="{{ URL::route('users.login')}}">Se Connecter</a>
        <a class="blog-nav-item" href="{{ URL::route('users.register')}}">S'enregistrer</a>
        @endif
      </nav>
    </div>
  </div>


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



    
    
 



  <footer class="blog-footer">
    <p>Blog créé a l'aide de  <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/Fred_simplon2">@Fred</a>.</p>
    <ul class="list-unstyled">
      <li><a href="https://github.com/Bobylove">GitHub</a></li>
      <li><a href="https://twitter.com/Fred_simplon2">Twitter</a></li>
      <li><a href="https://www.facebook.com/frederic.delon.33">Facebook</a></li>
    </ul>
    <p>
      <a href="#">Back to top</a>
    </p>
  </footer>

  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script src="../js/app.js" ></script>
</body>
</html>
