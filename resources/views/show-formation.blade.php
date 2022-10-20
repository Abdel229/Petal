@extends('layouts.structure')

@section('content')
@foreach ($formation as $formation)

<div class="bg-slate-100 p-1">
    <p class="font-serif font-bold">
        {{-- formation title --}}
        {{$formation->title}}
    </p>
    <p>
        {{-- formation content --}}
        @if(strlen($formation->content) > 15)
        {{substr($formation->content,0,13)}}...
        @else
        {{$formation->content}}
        @endif
    </p>

</div>
@endforeach

@endsection
