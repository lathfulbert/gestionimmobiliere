<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')| Administration</title>
     @vite('resources/css/app.css')
     @vite('resources/js/app.js')
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>