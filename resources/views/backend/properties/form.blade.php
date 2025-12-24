@extends('backend.properties.layout-form')
@section('title', 'Ajouter un bien')
@section('content')
    <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-xl p-8">
        <h2 class="text-2xl font-bold text-slate-800 mb-6">
            Enregistrer un nouveau logement
        </h2>
        <form class="grid grid-cols-1 md:grid-cols-2 gap-6"
            action="{{ route($property->exists ? 'property.update' : 'property.store', $property) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method($property->exists ? 'PUT' : 'POST')
            <div class="">
                <x-champs label="Titre" value="{{ $property->title ?? '' }}" name="title"></x-champs>
            </div>
            <div class="">
                <x-champs label="Surface" value="{{ $property->surface ?? '' }}" name="surface"></x-champs>
            </div>
            <div class="">
                <x-champs label="Chambre" value="{{ $property->chambre ?? '' }}" name="chambre"></x-champs>
            </div>
            <div class="">
                <x-champs label="prix" value="{{ $property->prix ?? '' }}" name="prix"></x-champs>
            </div>
            <div class="">
                <x-champs label="Ville" value="{{ $property->ville ?? '' }}" name="ville"></x-champs>
            </div>
            <div class="">
                <x-champs label="Adresse" value="{{ $property->adresse ?? '' }}" name="adresse"></x-champs>
            </div>
            <div class=" md:col-span-2">
                <x-champs type="textarea" value="{{ $property->description ?? '' }}" label="Description"
                    name="description"></x-champs>
            </div>
            <div class=" md:col-span-2">
                <x-champs multiple=true type="file" label="Photo" name="pictures"></x-champs>
            </div>
            <div class="md:col-span-2 text-right">
                <button type="submit" class="btn-primary px-8">
                    @if ($property->exists)
                        Modifier le bien
                    @else
                        Enregistrer le Bien
                    @endif
                </button>
            </div>
        </form>
    </div>
@endsection
