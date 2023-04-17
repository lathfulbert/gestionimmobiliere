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

    <div class="container mt-5">

      @if (session('success'))
         <div class="alert alert-success">
          {{ session ('success')}}
        </div>
      @endif
     
        
        @yield('content')

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>