@extends('base')

@section('title', 'LISTE DES BIENS')

@section('content')

<div class="bg-light p-5 mb-5 text-center">

    <form action="get" class="container d-flex gap-2">

        <input type="number" placeholder="Budget max" name="price" class="form-control">
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