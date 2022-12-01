@extends('layout.app')

@section('content')
<h2>Information sur {{ $book->name }}</h2>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Nom</th>
                <th>Auteur</th>
                <th>Genre</th>
                <th>Date de création</th>
                <th>Date de modification</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->name }}</td>
                <td>{{ $book->author->first_name }} {{ $book->author->last_name }}</td>
                <td>{{ $book->genre->name }}</td>
                <td>{{ $book->created_at }}</td>
                <td>{{ $book->updated_at }}</td>
            </tr>
        </tbody>
    </table>
@endsection