@extends('backend.base')
@section('title', 'Logement')
@section('content')
    <div class="bg-white rounded-xl shadow p-6">
        <div class=" flex justify-between">
            <h3 class="text-lg font-semibold mb-4">@yield('title')</h3>
            
        </div>
        <table class="w-full text-left" style="min-width: 750px;">
            <thead>
                <tr class="text-slate-500 border-b">
                    <th class="py-2">Client</th>
                    <th>Titre</th>
                    <th>Status</th>
                    {{-- <th class=" text-end">Action</th> --}}
                </tr>
            </thead>
            <tbody class="divide-y" style="min-width: 550px;">
                @foreach ($properties as $property)
                    @foreach ($property->clients as $client)
                        <tr>
                            <td>{{ $client->name }}</td>
                            <td>{{ $property->title }}</td>
                            <td>
                                <span class="{{ $client->pivot->status ? 'badge-green': ' pl-4 text-blue-600' }}">{{ $client->pivot->status ? 'En cours' : 'Libre' }}</span>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
