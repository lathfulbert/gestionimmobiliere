@extends('base')

@section('title', $property->title)

@section('content')
<div class="container">

<h1>{{ $property->title }} </h1>

<h2> {{ $property->rooms }} pièces - {{ $property->surface }}m2 - {{ $property->city }} </h2>

<div class="text-primary fw-bold" style="font-size: 4rem;">
        {{ number_format($property->price, thousands_separator: ' ') }}
        
</div>

<hr>

<div class="mt-4">

    <h4>Intéressé par un bien ?</h4>

     <form class="vstack gap-3" action="" method="post">
    
        @csrf

        <div class="row">
             @include('shared.input', ['class' => 'col', 'name' => 'firstname','label' => 'Prénom'])
             @include('shared.input', ['class' => 'col', 'name' => 'lastname','label' => 'Nom'])   
        </div>

        <div class="row">
             @include('shared.input', ['class' => 'col', 'name' => 'phone','label' => 'Téléphone'])
             @include('shared.input', ['type' => 'email','class' => 'col', 'name' => 'email','label' => 'Email'])   
        </div>

            @include('shared.input', ['type'=>'textarea', 'name' => 'description' ,'label' => 'Votre message'])

        <div>
            <button class="btn btn-primary">
               Nous Contacter
            </button>
        </div>
    
    </form>

    <div class="mt-4">
        <p>

            {{ nl2br($property->description) }}

        </p>
        <div class="row">
            <div class="col-8">
                <h2>Caractéristique</h2>

                <table class="table table-striped">
                    <tr>
                        <td>Surface</td>
                        <td>{{ $property->surface }}</td>
                    </tr>

                    <tr>
                        <td>Pièces</td>
                        <td>{{ $property->rooms }}</td>
                    </tr>

                    <tr>
                        <td>Chambres</td>
                        <td>{{ $property->bedrooms }}</td>
                    </tr>

                     <tr>
                        <td>Etage</td>
                        <td>{{ $property->floor }}</td>
                    </tr>

                </table>
            </div>

            <div class="col-4">
                <h2>Spécificités</h2>
                <ul class="list-group">
                    @foreach ($property->options as $option)

                    <li class="list-group-item"> {{ $option->name }}</li>
                        
                    @endforeach


                    

                </ul>
            </div>
        </div>
    </div>

</div>


</div>
@endsection