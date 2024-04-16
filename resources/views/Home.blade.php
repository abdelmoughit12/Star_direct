<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <x-navbr />

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <a href="{{ route('AddMagazines') }}" class="btn btn-primary d-block">Ajouter Magazine</a>
            </div>
            <div class="col-md-2">
                <a href="{{ route('AddUser') }}" class="btn btn-secondary d-block">Ajouter Utilisateur</a>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
