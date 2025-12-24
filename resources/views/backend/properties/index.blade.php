@extends('backend.base')
@section('title', 'Mes biens')
@section('content')
    <div class="bg-white rounded-xl shadow p-6">
        <div class=" flex justify-between">
            <h3 class="text-lg font-semibold mb-4">@yield('title')</h3>
            <a class="btn-primary px-8 mb-4" href="{{ route('property.create') }}">Ajouter un bien</a>
        </div>
        <table class="w-full text-left" style="min-width: 750px;">
            <thead>
                <tr class="text-slate-500 border-b">
                    <th class="py-2">Titre</th>
                    <th>Surface</th>
                    <th>Chambre</th>
                    <th>Prix</th>
                    <th>Status</th>
                    <th class=" text-end">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y" style="min-width: 550px;">
                @foreach ($properties as $property)
                    <tr>
                        <td class="py-3 hover:text-blue-700"><a href="#">{{ $property->title }}</a></td>
                        <td>{{ $property->surface }} m²</td>
                        <td>{{ $property->chambre }} @if ($property->chambre > 1)
                                chambres
                            @else
                                chambre
                            @endif
                        </td>
                        <td>{{ number_format($property->prix, thousands_separator: ' ') }} GNF</td>
                        <td>
                            <span class="badge-green">{{ $property->sold ? 'En location' : 'Libre' }}</span>
                        </td>
                        <td class="flex justify-end gap-2 ">
                            <div x-data="{ open: false }" class="relative">

                                <!-- BOUTON 3 POINTS -->
                                <button @click="open = !open" class="p-2 rounded-full hover:bg-slate-100 transition">
                                    <i class="fa-solid fa-ellipsis-vertical text-slate-500"></i>
                                </button>

                                <!-- MODAL / MENU -->
                                <div x-show="open" @click.outside="open = false" x-transition
                                    class="absolute right-0 mt-2 w-40 bg-white rounded-xl shadow-lg border z-50">

                                    <!-- EDIT -->
                                    <a href="{{ route('property.edit', $property) }}"
                                        class="flex items-center gap-2 px-4 py-2 text-sm hover:bg-slate-100">
                                        <i class="fa-solid fa-pen-to-square"></i> Modifier
                                    </a>

                                    <!-- DELETE -->
                                    <form method="POST" action="{{ route('property.destroy', $property) }}">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" onclick="return confirm('Voulez-vous supprimer ce bien ?')"
                                            class="w-full text-left flex items-center gap-2 px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                            <i class="fa-solid fa-trash"></i> Supprimer
                                        </button>
                                    </form>

                                </div>
                            </div>
                            {{-- <div x-data="{ open: false }" class="relative">
                                <button class="btn-primary" @click="open = !open" @click.away="open=false"
                                    class="p-2 rounded-md bg-gray-100">
                                    Action
                                </button>
                                <!-- mobile menu -->
                                <div x-show="open" x-cloak
                                    class="absolute right-4 mt-2 w-48 bg-white rounded-md shadow p-3">
                                    <a class=" text-blue-600" href="#" class="block py-2">Editer</a> <br>
                                    <a class=" text-red-600" href="#" class="block py-2">Supprimer</a>

                                </div>
                            </div> --}}
                            {{-- <a class=" bg-blue-600 px-4 py-1 text-white rounded hover:bg-blue-800 transition"
                                href="{{ route('property.edit', $property) }}">Editer</a>
                            <form action="{{ route('property.destroy', $property) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class=" bg-red-500 px-4 py-1 text-white rounded hover:bg-red-700 transition"
                                    type="submit">Supprimer</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    {{ $properties->links() }}
    @if (session('success'))
        <script>
            iziToast.success({
                title: 'Succès',
                message: "{{ session('success') }}",
                position: 'topRight',
                timeout: 4000,
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            iziToast.error({
                title: 'Erreur',
                message: "{{ session('error') }}",
                position: 'topRight',
                timeout: 4000,
            });
        </script>
    @endif

    @if (session('info'))
        <script>
            iziToast.info({
                title: 'Info',
                message: "{{ session('info') }}",
                position: 'topRight',
                timeout: 4000,
            });
        </script>
    @endif

    @if (session('warning'))
        <script>
            iziToast.warning({
                title: 'Attention',
                message: "{{ session('warning') }}",
                position: 'topRight',
                timeout: 4000,
            });
        </script>
    @endif

@endsection
