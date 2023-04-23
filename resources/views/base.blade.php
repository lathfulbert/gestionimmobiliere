<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')| Mon Agence</title>

     @vite(['resources/css/app.css' , 'resources/js/app.js'])
    
  </head>
  <body>

    @php
      $route = request()->route()->getName();
    @endphp

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

      <div class="container-fluid">

  <a class="navbar-brand" href="#">Agence</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      
      <li class="nav-item">
        <a @class(['nav-link', 'active' => str_contains($route, 'property.')]) href="/">Biens</a>
      </li>

     
      
    </ul>
  </div>
</div>

</nav>

@yield('content')

  </body>
</html>