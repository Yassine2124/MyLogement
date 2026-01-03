@extends('frontend.base')

@section('title', 'Nos biens')

@section('content')
   
    {{-- ================= TITRE PAGE ================= --}}
    <section class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-4">
            <h1 class="text-3xl font-bold">
                Nos biens immobiliers
            </h1>
            <p class="text-gray-600 mt-2">
                Découvrez nos maisons et appartements disponibles
            </p>
        </div>
    </section>


    {{-- ================= CONTENU ================= --}}
    <section class="max-w-7xl mx-auto px-4 py-16 flex justify-center">
        <div class="grid grid-cols-1   md:grid-cols-4 gap-8 md:justify-items-center">

            {{-- ===== LISTE DES BIENS ===== --}}
            <div class="md:col-span-4" >

                <div>
                    <div class="grid grid-cols-1 md:grid-cols-3 justify-center gap-8">

                        @foreach ($properties as $property)
                            <x-property-card :property="$property" />
                        @endforeach

                    </div>
                     {{ $properties->links() }}
                </div>

            </div>
        </div>
       
    </section>

@endsection
