@extends('admin.admin')

@section('title', $property->exists ? 'Editer un bien' : 'Créer un Bien')



@section('content')

    <h1>@yield('title')</h1>

    <form class="vstack gap-2" action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store' , $property) }}" method="post" 
        enctype="multipart/form-data">
    
        @csrf
        @method($property->exists ? 'put' : 'post')

        <div class="row">

            <div class="col" style="flex: 100">
                     <div class="row">

             @include('shared.input', ['class' => 'col', 'name' => 'title','label' => 'Titre', 'value'=> $property->title])

            <div class="col row">

            @include('shared.input', ['class' => 'col','name' => 'surface', 'value'=> $property->surface])
             
            @include('shared.input', ['class' => 'col','name' => 'price', 'label' => 'Prix', 'value'=> $property->price])

            </div>
        </div>

            @include('shared.input', ['type'=>'textarea', 'name' => 'description', 'value'=> $property->description])

         <div class="row">

             @include('shared.input', ['class' => 'col', 'name' => 'rooms', 'label' => 'Pièces', 'value'=> $property->rooms])
             @include('shared.input', ['class' => 'col', 'name' => 'bedrooms', 'label' => 'Chambres', 'value'=> $property->bedrooms])
             @include('shared.input', ['class' => 'col', 'name' => 'floor', 'label' => 'Etage', 'value'=> $property->floor])
   
        </div>

         <div class="row">

             @include('shared.input', ['class' => 'col', 'name' => 'address', 'label' => 'Adresse', 'value'=> $property->address])
             @include('shared.input', ['class' => 'col', 'name' => 'city', 'label' => 'Ville', 'value'=> $property->city])
             @include('shared.input', ['class' => 'col', 'name' => 'postal_code', 'label' => 'Code Postal', 'value'=> $property->postal_code])
   
        </div>

        @include('shared.select', ['name' => 'options', 'label' => 'Options', 'value' => $property->options()->pluck('id'), 'multiple' => true , 'options' => $options])

        @include('shared.checkbox', ['name' => 'sold', 'label' => 'Vendu', 'value'=> $property->sold])

            </div>


            <div class="col" style="flex: 25">

                    @foreach ($property->pictures as $picture)
                    
                    <div id="picture{{ $picture->id }}">


                           <img src="{{ $picture->getImageUrl() }}" alt="" class="w-100 d-block">


                 <button type="button" 
                 class="btn btn-danger"
                 hx-delete="{{ route('admin.picture.destroy' , $picture) }}"
                 hx-target="#picture{{ $picture->id }}" 
                 hx-swap="delete">
                   Supprimer </button>
                    </div>
                    @endforeach


                @include('shared.upload', [ 'name' => 'pictures', 'label' => 'Images', 'multiple' => true])
            </div>



        </div>

        <div>
            <button class="btn btn-primary">
                @if ($property->exists)

                    Modifier
                
                @else

                Créer
                    
                @endif
            </button>
        </div>
    
    </form>

@endsection