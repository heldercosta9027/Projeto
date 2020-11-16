<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.css')}}">
    </head>
    <body>
        @yield ('conteudo')
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('atores.index')}}">Atores</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('filmes.index')}}">Filmes </a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('generos.index')}}">Generos</a>
      </li>
    </ul>
  </div>
</nav>
        
    <script scr="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script scr="{{asset('js/bootstrap.js')}}"></script>
    <script scr="{{asset('js/all.js')}}"></script>
    </body>
</html>