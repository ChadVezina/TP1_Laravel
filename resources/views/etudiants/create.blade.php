@extends('layout')

@section('title', 'Nouvel Étudiant')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="mb-4">
            <h1 class="page-title">Ajouter un nouvel étudiant</h1>
            <p class="text-muted">Remplissez les informations de l'étudiant</p>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Erreur de validation :</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        <div class="card">
            <div class="card-body p-4">
                <form action="{{ route('etudiants.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="nom" class="form-label fw-semibold">Nom complet</label>
                        <input type="text"
                            class="form-control @error('nom') is-invalid @enderror"
                            id="nom"
                            name="nom"
                            value="{{ old('nom') }}"
                            placeholder="Entrez le nom complet"
                            required>
                        @error('nom')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="adresse" class="form-label fw-semibold">Adresse</label>
                        <input type="text"
                            class="form-control @error('adresse') is-invalid @enderror"
                            id="adresse"
                            name="adresse"
                            value="{{ old('adresse') }}"
                            placeholder="Entrez l'adresse"
                            required>
                        @error('adresse')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="telephone" class="form-label fw-semibold">Téléphone</label>
                            <input type="text"
                                class="form-control @error('telephone') is-invalid @enderror"
                                id="telephone"
                                name="telephone"
                                value="{{ old('telephone') }}"
                                placeholder="(555) 123-4567"
                                required>
                            @error('telephone')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="exemple@email.com"
                                required>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="date_naissance" class="form-label fw-semibold">Date de naissance</label>
                            <input type="date"
                                class="form-control @error('date_naissance') is-invalid @enderror"
                                id="date_naissance"
                                name="date_naissance"
                                value="{{ old('date_naissance') }}">
                            @error('date_naissance')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="ville_id" class="form-label fw-semibold">Ville</label>
                            <select class="form-select @error('ville_id') is-invalid @enderror"
                                id="ville_id"
                                name="ville_id"
                                required>
                                <option value="">Sélectionnez une ville</option>
                                @foreach ($cities as $city)
                                <option value="{{ $city->id }}" {{ old('ville_id') == $city->id ? 'selected' : '' }}>
                                    {{ $city->name }}
                                </option>
                                @endforeach
                            </select>
                            @error('ville_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex gap-2 mt-4">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                        <a href="{{ route('etudiants.index') }}" class="btn btn-light">Annuler</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection