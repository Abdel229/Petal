@extends('layouts.structure')

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        @foreach ($error->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </div>
    @endif


<form action="{{route('formation.store')}}" method="post">
    @csrf
    <p>
        <label for="title">Titre</label>
        <input type="text" name="title" id="title">
    </p>
    <p>
        <label for="content">Content</label>
        <Textarea name="content" title="content"></Textarea>
    </p>
    <p>
        <label for="date">Date de formation</label>
        <input type="date" name="date" id="date">
    </p>
    <p>
        <label for="price">Prix</label>
        <input type="number" name="price" id="price">
    </p>
    <p>
        <button class="bg-blue-600" type="submit">Créer</button>
    </p>
</form>

@endsection
