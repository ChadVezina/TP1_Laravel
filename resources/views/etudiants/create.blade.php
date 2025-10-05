@extends('layout')

@section('title', 'Nouvel Étudiant')

@section('content')
    <h1>Ajouter un nouvel étudiant</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('etudiants.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom">Nom complet</label>
            <input type="text" id="nom" name="nom" value="{{ old('nom') }}" required>
        </div>

        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" id="adresse" name="adresse" value="{{ old('adresse') }}" required>
        </div>

        <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="text" id="telephone" name="telephone" value="{{ old('telephone') }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="date_naissance">Date de Naissance:</label>
            <input type="date" id="date_naissance" name="date_naissance" value="{{ old('date_naissance') }}">
        </div>

        <div class="form-group">
            <label for="ville_id">Ville</label>
            <select class="form-control" id="ville_id" name="ville_id" required>
                <option value="">Sélectionnez une ville</option>
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}" {{ old('ville_id') == $city->id ? 'selected' : '' }}>
                        {{ $city->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('etudiants.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
@endsection