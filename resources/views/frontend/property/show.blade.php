@extends('frontend.base')

@section('title', 'Détail du bien')

@section('content')
    @if ($notify)
        <livewire:accept-logement :notification_id="$notify">
        {{-- <div class="bg-gray-100 py-16 text-center flex gap-3 justify-center items-center ">
            <a href="" class=" text-blue-700">
                <i class=" fa fa-check"></i>
                Accepter
            </a>
            <a href="" class=" text-red-700">
                <i class="fa fa-times"></i>
                Refuser
            </a>
        </div> --}}
    @endif
    {{-- ================= CAROUSEL ================= --}}
    {{-- ================= CAROUSEL SWIPER ================= --}}
    <section class="bg-black">
        <div class="max-w-7xl mx-auto">

            <div class="swiper propertySwiper h-[500px]">
                <div class="swiper-wrapper">

                    @foreach ($property->images as $image)
                        <div class="swiper-slide">
                            <img src="{{ $image->getImageUrl() }}" class="w-full h-full object-cover">
                        </div>
                    @endforeach
                </div>

                {{-- Navigation --}}
                <div class="swiper-button-next text-white"></div>
                <div class="swiper-button-prev text-white"></div>

                {{-- Pagination --}}
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>

    {{-- ================= INFOS PRINCIPALES ================= --}}
    <section class="max-w-7xl mx-auto px-4 py-12">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center">

            <div>


                <h1 class="text-3xl font-bold mb-2">
                    {{ $property->title }}
                </h1>

                <p class="text-gray-500">
                    {{ $property->adresse }}
                </p>
            </div>

            <div class="text-indigo-600 text-3xl font-bold mt-6 md:mt-0">
                {{ number_format($property->prix, thousands_separator: ' ') }} GNF
            </div>

        </div>
    </section>
    {{-- ================= STATS ================= --}}
    <section class="max-w-7xl mx-auto px-4 pb-12">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">

            <div class="bg-white p-6 rounded-xl shadow">
                <div>Chambre</div>
                <span class="font-semibold">{{ $property->chambre }} {{ $property->chambre > 1 ? 'Chambres' : 'Chambre' }}
                </span>
            </div>
            <div class="bg-white p-6 rounded-xl shadow">
                <div>Surface</div>
                <span class="font-semibold">{{ $property->surface }} m²</span>
            </div>
            <div class="bg-white p-6 rounded-xl shadow">
                <div>
                    Proprietaire:
                </div>
                <span class="font-semibold">{{ $property->user->name }}</span>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <div>Telephone</div>
                <span class="font-semibold">{{ number_format($property->user->telephone, thousands_separator: '-') }}</span>
            </div>

        </div>
    </section>
    {{-- ================= DESCRIPTION ================= --}}
    <section class="max-w-7xl mx-auto px-4 py-12">
        <h2 class="text-2xl font-bold mb-4">
            Description
        </h2>

        <p class="text-gray-600 leading-relaxed">
            {{ $property->description }}
        </p>
    </section>

    {{-- ================= CONTACT ================= --}}

    @if ($property->user->id == Auth::user()->id)
    @else
        <section class="bg-gray-100 py-16">
            <livewire:property-contact-table :property="$property"></livewire:property-contact-table>
        </section>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.propertySwiper', {
                loop: true,
                spaceBetween: 10,
                grabCursor: true,

                autoplay: {
                    delay: 3000, // 3 secondes
                    disableOnInteraction: false,
                },

                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },

                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
    </script>

@endsection
