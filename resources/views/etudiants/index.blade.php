@extends('layout')

@section('title', 'Liste des étudiants')

@section('content')
<h1>Liste des étudiants</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Ville</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->city->name ?? '-' }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('etudiants.show', $student->id) }}">Voir</a>
                    <a class="btn btn-secondary btn-sm" href="{{ route('etudiants.edit', $student->id) }}">Éditer</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection