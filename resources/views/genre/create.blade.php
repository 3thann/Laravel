@extends('layout.app')

@section('content')
<h2>Ajouter un genre</h2>

<form action="{{ route('genre.store') }}" method="POST">
    @csrf
    <label for="name">Nom : </label>
    <input type="text" id="name" name="name">
    <button type="submit">Créer un genre !</button>
</form>

@endsection