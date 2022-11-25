@extends('layout.app')

@section('content')
<h2>Modifier le livre {{ $book->name }}</h2>

<form action="{{ route('book.update', $book->id) }}" method="POST">
    @method("PUT")
    @csrf
    <label for="name">Nom : </label>
    <input type="text" id="name" name="name" value="{{ $book->name }}">
    <button type="submit">Modifier</button>
</form>

@endsection