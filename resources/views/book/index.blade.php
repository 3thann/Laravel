@extends('layout.app')

@section('content')
<h2>Liste des livres</h2>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Noms</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->name }}</td>
                    <td>
                        <a href="{{ route('book.show', $book->id) }}">Voir</a>
                        <a href="{{ route('book.edit', $book->id) }}">Modifier</a>
                        <form action="{{ route('book.destroy', $book->id) }}" method="POST">
                            @method("delete")
                            @csrf
                            <input type="hidden" name="book_id" value="{{ $book->id }}">
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection