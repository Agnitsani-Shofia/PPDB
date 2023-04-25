<!DOCTYPE html>
<html>
<head>
<title>Projek PPDB </title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap
/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>

 <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PPDB SMK Wikrama 1 Garut</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <a class="nav-link" href="{{ route('ppdbs.index') }}">Pendaftaran</a>
      </div>
  <form align="right" action="/logout" method="POST">
    
            @csrf
            <button class="btn btn-light">Logout</button>
        </form>
</nav>
<div class="container">
@yield('content')
</div>
</body>
</html>