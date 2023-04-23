@extends('base')

@section('content')

<div class="bglight p-5 mb-5 text-center">
    <div class="container">
        <h1>  titre  </h1>
        <p>
            contenu
        </p>
    </div>
</div>

<div class="container">
    <div class="row">
         <h1>  Gérer nos Biens </h1>

         @foreach ($properties as $property)
             
         
        <div class="col">

            @include('property.card')
           
       </div>
        @endforeach

       
    </div>
        
    </div>



@endsection