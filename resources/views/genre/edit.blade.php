@extends('layout.app')

@section('content')
<h2>Modifier le genre {{ $genre->name }}</h2>

<form action="{{ route('genre.update', $genre->id) }}" method="POST">
    @method("PUT")
    @csrf
    <label for="name">Nom : </label>
    <input type="text" id="name" name="name" value="{{ $genre->name }}">
    <button type="submit">Modifier</button>
</form>

@endsection