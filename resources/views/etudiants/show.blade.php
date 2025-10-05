@extends('layout')

@section('title ', 'Détails de l\'Étudiant')

@section('content')
<h1>Détails de l'étudiant</h1>

<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ $student->name }}</h4>
        <p class="card-text">Email: {{ $student->email }}</p>
        <p class="card-text">Téléphone: {{ $student->phone }}</p>
        <p class="card-text">Adresse: {{ $student->address }}</p>
        <p class="card-text">Date de naissance: {{ $student->birthdate }}</p>
        <p class="card-text">Ville: {{ $student->city->name ?? 'Non spécifiée' }}</p>
        <a href="{{ route('etudiants.index') }}" class="btn btn-secondary">Retour à la liste</a>
        <a href="{{ route('etudiants.edit', $student->id) }}" class="btn btn-primary">Modifier</a>
    </div>
</div>
@endsection