@extends('layouts.structure')

@section('content')
    @foreach ($formations as $formation)
        <form action="{{ route('formation.update', ['formation' => $formation->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <p>
                <label for="title">Titre</label>
                <input type="text" name="title" id="title" value="{{ $formation->title }}">
            </p>
            <p>
                <label for="content">Content</label>
                <Textarea name="content" title="content" value="{{ $formation->content }}"></Textarea>
            </p>
            <p>
                <label for="date">Date de formation</label>
                <input type="date" name="date" id="date" value="{{ $formation->date }}">
            </p>
            <p>
                <label for="price">Prix</label>
                <input type="number" name="price" id="price" value="{{ $formation->price }}">
            </p>
            <p>
                <button class="bg-blue-600" type="submit">Mettre à jour</button>
            </p>
        </form>
    @endforeach
@endsection
