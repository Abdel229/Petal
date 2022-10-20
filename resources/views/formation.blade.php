@extends('layouts.structure')

@section('content')
    <div class="grid grid-cols-4 gap-3 m-auto w-5/6">
        @forelse ($formations as $formation)


            <div class="bg-slate-100 p-1">
                <p class="font-serif font-bold">
                    {{-- formation title --}}
                    {{ $formation->title }}
                </p>
                <p>
                    {{-- formation content --}}
                    @if (strlen($formation->content) > 15)
                        {{ substr($formation->content, 0, 13) }}...
                    @else
                        {{ $formation->content }}
                    @endif
                </p>



                <a class="transition text-blue-800 hover:text-green-800 pointer"
                    href="{{ route('formation.show', ['formation' => $formation->id]) }}">Voir plus</a>
            </div>

        @empty
            <p>Aucune formation</p>
        @endforelse
    </div>
@endsection
