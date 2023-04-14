@extends('admin.admin')

@section('title', $property->exists ? 'Editer un bien' : 'Créer un Bien')



@section('content')

    <h1>@yield('title')</h1>

    <form class="vstack gap-2" action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store' , $property) }}" method="post">
    
        @csrf
        @method($property->exists ? 'put' : 'post')

        <div class="row">

             @include('shared.input', ['class' => 'col', 'label' => 'Titre','name' => 'title', 'value'=> $property->title])

            <div class="col row">

            @include('shared.input', ['class' => 'col','name' => 'surface', 'value'=> $property->surface])
             
            @include('shared.input', ['class' => 'col','name' => 'price', 'value'=> $property->price])

            </div>
        </div>

            @include('shared.input', ['type'=>'textarea', 'name' => 'description', 'value'=> $property->description])


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