<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter un Vehicule</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col s12"> 
                <h1>Ajouter un Vehicule</h1>
                <hr>
                
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{$error}}</li>
                    @endforeach
                </ul>
                <form action="/ajouter/traitement" method="POST" class="form-group" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" id="type" name="type">
                    </div>
                
                    <div class="form-group">
                        <label for="date_achat">Date d'achat</label>
                        <input type="date" class="form-control" id="date_achat" name="date_achat">
                    </div>
                
                    <div class="form-group">
                        <label for="defaut">Défaut</label>
                        <input type="text" class="form-control" id="defaut" name="defaut">
                    </div>
                
                    <div class="form-group">
                        <label for="matricule">Matricule</label>
                        <input type="text" class="form-control" id="matricule" name="matricule">
                    </div>
                    
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    
                    <div class="form-group">
                        <label for="chauffeur">Chauffeur</label>
                        <input type="text" class="form-control" id="chauffeur" name="chauffeur">
                    </div>
                    
                    <div class="form-group">
                        <label for="statut">Statut</label>
                        <input type="text" class="form-control" id="statut" name="statut">
                    </div>
                
                    <br>
                    <button type="submit" class="btn btn-primary">Ajouter un Vehicule</button>
                    <br><br/>
                    <a href="/vehicule" class="btn btn-danger">Revenir à la liste des vehicules</a>
                </form>
            </div>
        </div>  
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
