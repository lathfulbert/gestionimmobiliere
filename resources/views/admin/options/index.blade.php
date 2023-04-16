@extends('admin.admin')

@section('title' , 'Liste des Options')

@section('content')

  <div class="d-flex justify-content-between align-items-center">
    <h1>@yield('title')</h1>
    <a href="{{ route('admin.option.create') }}" class="btn btn-primary"> Ajouter une option</a>
  </div>

<table  class="table table-striped">
                  <thead>
                  <tr>
                    <th>Nom</th>
                 
                    <th class="text-end">Actions</th>
                  </tr>
                  </thead>
                  <tbody>
            @foreach ($options as $option)
              
                  <tr>
                    <td>{{ $option->name }}</td>
                   
                    <td>
                      <div class="d-flex gap-2 w-100 justify-content-end">
                       <a class="btn btn-primary" href="{{ route('admin.option.edit', $option) }}">Editer</a>
                        
                       <form action="{{ route('admin.option.destroy', $option) }}" method="post">
                        
                        @csrf
                        @method("delete")
                        <button type="submit" class="btn btn-danger">Supprimer</button>

                        </form>
                      </div>
                    </td>
                    
                  </tr>
            @endforeach
                
                </table>
              
          {{ $options->links() }}      

@endsection