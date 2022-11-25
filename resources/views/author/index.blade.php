@extends('layout.app')

@section('content')
<h2>Liste des auteurs</h2>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Prenoms</th>
                <th>Noms</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author->id }}</td>
                    <td>{{ $author->first_name }}</td>
                    <td>{{ $author->last_name }}</td>
                    <td>
                        <a href="{{ route('author.show', $author->id) }}">Voir</a>
                        <a href="{{ route('author.edit', $author->id) }}">Modifier</a>
                        <form action="{{ route('author.destroy', $author->id) }}" method="POST">
                            @method("delete")
                            @csrf
                            <input type="hidden" name="author_id" value="{{ $author->id }}">
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection