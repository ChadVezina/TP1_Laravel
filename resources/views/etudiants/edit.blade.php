@extends('layout')

@section('title', 'Éditer un étudiant')

@section('content')
<h1>Modifier l'étudiant</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $erreur)
        <li>{{ $erreur }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('etudiants.update', $etudiant->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- On émet la requête en tant que PUT (ou PATCH) -->

    <div class="form-group">
        <label for="name">Nom complet</label>
        <input type="text" name="name" id="name" class="form-control"
            value="{{ old('name', $etudiant->name) }}" required>
    </div>

    <div class="form-group">
        <label for="address">Adresse</label>
        <input type="text" name="address" id="address" class="form-control"
            value="{{ old('address', $etudiant->address) }}" required>
    </div>

    <div class="form-group">
        <label for="phone">Téléphone</label>
        <input type="text" name="phone" id="phone" class="form-control"
            value="{{ old('phone', $etudiant->phone) }}" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control"
            value="{{ old('email', $etudiant->email) }}" required>
    </div>

    <div class="form-group">
        <label for="birthdate">Date de naissance</label>
        <input type="date" name="birthdate" id="birthdate" class="form-control"
            value="{{ old('birthdate', $etudiant->birthdate) }}" required>
    </div>

    <div class="form-group">
        <label for="city_id">Ville</label>
        <select name="city_id" id="city_id" class="form-control" required>
            <option value="">-- Sélectionnez une ville --</option>
            @foreach($cities as $city)
            <option value="{{ $city->id }}"
                {{ (old('city_id', $etudiant->city_id) == $city->id) ? 'selected' : '' }}>
                {{ $city->name }}
            </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
    <a href="{{ route('etudiants.index') }}" class="btn btn-light">Annuler</a>
</form>
@endsection