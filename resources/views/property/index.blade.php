@extends('base')

@section('title', 'LISTE DES BIENS')

@section('content')

<div class="bg-light p-5 mb-5 text-center">

    <form action="" method="get" class="container d-flex gap-2">

        <input type="number" placeholder="Budget max" name="price" class="form-control" value="{{ $input['price'] ?? '' }}">
        
        <input type="number" placeholder="Surface Minimum" name="surface" class="form-control" value="{{ $input['surface'] ?? '' }}">

        <input type="number" placeholder="Nombre de pièce(s) Minimum" name="rooms" class="form-control" value="{{ $input['rooms'] ?? '' }}">

        <input  placeholder="Mots-clés" name="title" class="form-control" value="{{ $input['title'] ?? '' }}">

        <button class="btn btn-primary btn-sm flef-grow-0">
            Rechercher
        </button>
    </form>

</div>





<div class="container">
    <div class="row">
         

         @foreach ($properties as $property)
             
         
        <div class="col-3 mb-4">

            @include('property.card')
           
       </div>
        @endforeach

        <div class="my-4">
        {{ $properties->links() }}
    </div>

    </div>

    
        
    </div>

    @endsection