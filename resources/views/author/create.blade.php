@extends('layout.app')

@section('content')
<h2>Ajouter un auteur</h2>

<form action="{{ route('author.store') }}" method="POST">
    @csrf
    <label for="first_name">Prenom : </label>
    <input type="text" id="first_name" name="first_name">
    <label for="last_name">Nom : </label>
    <input type="text" id="last_name" name="last_name">
    <button type="submit">Créer un auteur !</button>
</form>

@endsection