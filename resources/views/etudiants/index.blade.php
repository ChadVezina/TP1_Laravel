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
        @foreach ($etudiants as $etudiant)
            <tr>
                <td>{{ $etudiant->name }}</td>
                <td>{{ $etudiant->email }}</td>
                <td>{{ $etudiant->ville->name ?? '-' }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('etudiants.show', $etudiant->id) }}">Voir</a>
                    <a class="btn btn-secondary btn-sm" href="{{ route('etudiants.edit', $etudiant->id) }}">Éditer</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection