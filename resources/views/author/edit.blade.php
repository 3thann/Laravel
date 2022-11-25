@extends('layout.app')

@section('content')
<h2>Modifier l'auteur {{ $author->name }}</h2>

<form action="{{ route('author.update', $author->id) }}" method="POST">
    @method("PUT")
    @csrf
    <label for="first_name">Prenom : </label>
    <input type="text" id="first_name" name="first_name" value="{{ $author->name }}">
    <label for="last_name">Nom : </label>
    <input type="text" id="last_name" name="last_name" value="{{ $author->name }}">
    <button type="submit">Modifier</button>
</form>

@endsection