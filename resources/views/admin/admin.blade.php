<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')| Administration</title>
     @vite('resources/css/app.css')
     @vite('resources/js/app.js')
     <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>

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
        <a @class(['nav-link', 'active' => str_contains($route, 'property.')]) href="{{ route('admin.property.index') }}">Gerer les Biens</a>
      </li>

      <li class="nav-item">
        <a @class(['nav-link', 'active' => str_contains($route, 'option.')]) href="{{ route('admin.option.index') }}">Gerer les Options</a>
      </li>
      
    </ul>
  </div>
</div>

</nav>

    <div class="container mt-5">

      @if (session('success'))
         <div class="alert alert-success">
          {{ session ('success') }}
        </div>
      @endif


      @if ($errors->any())

         <div class="alert alert-danger">
            <ul class="my-0">
              @foreach ($errors->all() as $error)
                  
              @endforeach
                  <li> {{ $error }}</li>
            </ul>
        </div>

      @endif
     
        
        @yield('content')

    </div>

<script>
  new TomSelect('select[multiple]', {plugins: {remove_button: {title : 'Supprimer'}}})
  
</script>

  </body>
</html>