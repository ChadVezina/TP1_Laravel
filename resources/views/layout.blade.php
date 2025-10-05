<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collège Maisonneuve - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <a class="navbar-brand" href="#">Collège de Maisonneuve</a>
        <ul class="navbar-nav ml-auto"></ul>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('etudiants.index') }}">Liste des étudiants</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('etudiants.create') }}">Nouvel étudiant</a></li>
            </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>