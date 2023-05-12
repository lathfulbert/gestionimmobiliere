<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')| Administration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.bootstrap5.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
    <script src="https://unpkg.com/htmx.org@1.8.6"></script>
    <style>
      @layer reset {
        button {all: unset;}
      }

    </style>

 
    
  </head>
  <body>

    @php
      $route = request()->route()->getName();
    @endphp

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

      <div class="container-fluid">

  <a class="navbar-brand" href="{{ route('admin.property.index') }}">Agence</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      
      <li class="nav-item">
        <a @class(['nav-link', 'active' => str_contains($route, 'property.')]) href="{{ route('admin.property.index') }}">Gerer les Biens</a>
      </li>

      <li class="nav-item">
        <a @class(['nav-link', 'active' => str_contains($route, 'option.')]) href="{{ route('admin.option.index') }}">Gerer les Options</a>
      </li>
      
    </ul>

    <div class="ms-auto">

       <ul class="navbar-nav">
      
      <li class="nav-item">
        <form action="{{ route('logout')}}" method="post">
          @csrf
           @method('delete')
           <button class="nav-link">Se Deconnecter</button>
        </form>
      </li>

    </ul>

    </div>
  </div>
</div>

</nav>

    <div class="container mt-5">

     @include('shared.flash')
        
        @yield('content')

    </div>

<script>
  new TomSelect('select[multiple]', {plugins: {remove_button: {title : 'Supprimer'}}})
  
</script>

  </body>
</html>