@extends('layout.app')

@section('content')
<h2>Information sur {{ $genre->name }}</h2>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Genre</th>
                <th>Date de création</th>
                <th>Date de modification</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $genre->id }}</td>
                <td>{{ $genre->name }}</td>
                <td>{{ $genre->created_at }}</td>
                <td>{{ $genre->updated_at }}</td>
            </tr>
        </tbody>
    </table>
    <ul>
        @foreach ($genre->books as $book)
            <li>{{ $book->name }}</li>
        @endforeach
    </ul>
@endsection