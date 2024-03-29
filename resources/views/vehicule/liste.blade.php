<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Véhicules</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1>Liste des Véhicules</h1>
                <hr>
                <a href="/ajouter" class="btn btn-primary">Ajouter un Véhicule</a>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Type</th>
                            <th>Date d'Achat</th>
                            <th>Défaut</th>
                            <th>Matricule</th>
                            <th>Chauffeur</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehicules as $vehicule)
                        <tr>
                            <td>{{ $vehicule->id }}</td>
                            <td><img src="{{ asset('/storage/image/' . $vehicule->image) }}" alt="Image du véhicule" style="max-width: 100px;"></td>
                            <td>{{ $vehicule->type }}</td>
                            <td>{{ $vehicule->date_achat }}</td>
                            <td>{{ $vehicule->defaut }}</td>
                            <td>{{ $vehicule->matricule }}</td>
                            <td>{{ $vehicule->chauffeur }}</td>
                            <td>{{ $vehicule->statut }}</td>
                            <td>
                                <a href="{{ route('vehicule.update', $vehicule->id) }}" class="btn btn-info">Update</a>
                                <a href="{{ route('vehicule.delete', $vehicule->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
