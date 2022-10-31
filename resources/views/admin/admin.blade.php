@extends('layouts.structure')

@section('content')
    <h1 class="bg-green-200 font-extrabold">ADMIN</h1>

    <div class=" m-auto space-y-3 w-10/12 mt-5">
        {{-- Single formation --}}
        @forelse ($formations as $formation)
            <div class="flex justify-around bg-slate-200">
                <p>{{ $formation->title }}</p>
                <a href="{{ route('formation.edit', ['formation' => $formation->id]) }}"
                    class="w-16 text-center h-11 border rounded-lg bg-blue-600">Update</a>
                <a href="{{ route('formation.destroy', ['formation' => $formation->id]) }}"
                    class="w-16 text-center h-11 border rounded-lg bg-red-600">Destroy</a>
            </div>
        @empty
        <p>Vous n'avez aucun poste</p>
        @endforelse
        <div>
            </p>
        </div>
    </div>
@endsection
