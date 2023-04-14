@extends('admin.admin')

@section('content')

<table id="example2" class="table table-striped">
                  <thead>
                  <tr>
                    <th>Titre</th>
                    <th>Surface</th>
                    <th>Price</th>
                    <th>Ville</th>
                    <th class="text-end">Actions</th>
                  </tr>
                  </thead>
                  <tbody>
            @foreach ($properties as $property)
              
                  <tr>
                    <td>{{ $property->title }}</td>
                    <td>{{ $property->surface }} m2</td>
                    <td>{{ number_format($property->price, thousands_separator: ' ') }}</td>
                    <td>{{ $property->city }}</td>
                    <td></td>
                    
                  </tr>
            @endforeach
                
                </table>
              
          {{ $properties->links() }}      

@endsection