<?php

namespace App\Http\Controllers\Backend\Property;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\PropertyRequest;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::query()->Recent()->where('user_id', Auth::user()->id)->paginate(5);
        return view('backend.properties.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $property = new Property();
        return view('backend.properties.form', compact('property'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyRequest $request)
    {
        $user = Auth::user();
        $data = $request->validated();
        $data['user_id'] = $user->id;
        $property = Property::query()->create($data);
        $property->attachFiles($request->validated('pictures') ?? []);
        return to_route('property.index')->with('success', 'Bien enregistré avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        return view('backend.properties.form', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PropertyRequest $request, Property $property)
    {
        $property->update($request->validated());
        if ($request->validated('pictures')) {
            $property->deleteAllImage();
            $property->attachFiles($request->validated('pictures') ?? []);
        }
        return to_route('property.index')->with('success', 'Bien modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        $property->delete();
        return to_route('property.index')->with('success', 'Bien supprimé avec succès');
    }
}
