@php
    $property ??= null;
@endphp
<div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

    <img src="{{ $property?->firstImage() }}" class="w-full h-48 object-cover">

    <div class="p-4">
        <span class="inline-block bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full mb-2">
            À louer
        </span>

        <h3 class="font-semibold text-lg mb-1">
            {{ $property->title }}
        </h3>

        <p class="text-sm text-gray-500 mb-3">
            {{ $property->ville }} | {{ $property->adresse }}
        </p>

        <div class="flex justify-between items-center">
            <span class="text-indigo-600 font-bold">
                {{ number_format($property->prix,thousands_separator:' ') }} GNF
            </span>

            <a href="{{ route('frontend.property.show', ['slug' => $property->getSlug(), 'property' => $property,'notify'=>0]) }}"
                class="text-sm text-indigo-600 hover:underline">
                Détails →
            </a>
        </div>
    </div>

</div>
