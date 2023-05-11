<?php

namespace App\Http\Controllers\Admin;

use App\Models\Option;
use App\Models\Property;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\PropertyFormRequest;
use Illuminate\Support\Facades\Auth;


class PropertyController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Property::class, 'property');
    }
    
    
    
    
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      // Auth::user()->can('viewAny', Property::class);

        $this->authorize('viewAny', Property::class);

        return view('admin.properties.index', [
            'properties' => Property::orderBy('created_at', 'desc')->paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {       
        $property = new Property();

        $property->fill([

            'surface' => 40,
            'rooms'  => 3,
            'bedrooms' => 1,
            'floor' => 8,
            'city' => 'Montpellier',
            'postal_code' => 34000,
            'sold' => false,

        ]);

    
        
        return view('admin.properties.form',[
            'property' => $property,
            'options'  => Option::pluck('name', 'id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyFormRequest $request)
    {
       
        $property = Property::create($request->validated());
        $property->options()->sync($request->validated('options'));

        return to_route('admin.property.index')->with('success', 'Le Bien a été crée');
    }

  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
       // $this->authorize('update', $property);
        
        return view('admin.properties.form', [
            'property' => $property,
            'options'  => Option::pluck('name', 'id'),
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PropertyFormRequest $request, Property $property)
    {
        
        $property->update($request->validated());
        $property->options()->sync($request->validated('options'));
        return to_route('admin.property.index')->with('success', 'Le Bien a été bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        $property->delete();
        return to_route('admin.property.index')->with('success', 'Le Bien a été bien supprimé');

    }
}
