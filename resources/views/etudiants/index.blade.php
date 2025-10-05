@extends('layout')

@section('title', 'Liste des étudiants')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="page-title mb-0">Liste des étudiants</h1>
    <a href="{{ route('etudiants.create') }}" class="btn btn-primary">
        + Ajouter un étudiant
    </a>
</div>

@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif

<div class="card">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="py-3 px-4">Nom</th>
                        <th class="py-3 px-4">Email</th>
                        <th class="py-3 px-4">Ville</th>
                        <th class="py-3 px-4 text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($students as $student)
                    <tr>
                        <td class="py-3 px-4 fw-semibold">{{ $student->name }}</td>
                        <td class="py-3 px-4 text-muted">{{ $student->email }}</td>
                        <td class="py-3 px-4">{{ $student->city->name ?? '-' }}</td>
                        <td class="py-3 px-4 text-end">
                            <a href="{{ route('etudiants.show', $student->id) }}"
                                class="btn btn-sm btn-outline-primary">
                                Voir
                            </a>
                            <a href="{{ route('etudiants.edit', $student->id) }}"
                                class="btn btn-sm btn-outline-secondary">
                                Modifier
                            </a>
                            <form class="d-inline" action="{{ route('etudiants.destroy', $student->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?');"
                                    type="submit"
                                    class="btn btn-sm btn-outline-danger">
                                    Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-5 text-muted">
                            Aucun étudiant trouvé
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection