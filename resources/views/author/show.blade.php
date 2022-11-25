@extends('layout.app')

@section('content')
<h2>Information sur {{ $author->name }}</h2>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Date de création</th>
                <th>Date de modification</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $author->id }}</td>
                <td>{{ $author->first_name }}</td>
                <td>{{ $author->last_name }}</td>
                <td>{{ $author->created_at }}</td>
                <td>{{ $author->updated_at }}</td>
            </tr>
        </tbody>
    </table>
@endsection