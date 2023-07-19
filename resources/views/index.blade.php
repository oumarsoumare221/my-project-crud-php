<!DOCTYPE html>
<html>

<head>
    <title>Liste des formateurs</title>
    <!-- Ajouter les liens vers les fichiers Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    <div class="container">
        <!-- Utiliser la classe "mb-3" pour ajouter un peu d'espace sous le bouton -->
        <div class="mb-3">
            <a href="/formateurs/ajouter" class="btn btn-primary">Ajouter formateur</a>
        </div>

        <h1>Liste des formateurs</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Filière</th>
                    <th>Matières</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($formateurs as $formateur)
                <tr>
                    <td>{{ $formateur->nom }}</td>
                    <td>{{ $formateur->prenom }}</td>
                    <td>{{ $formateur->filiere }}</td>
                    <td>{{ $formateur->matieres }}</td>
                    <td>
                        <a href="/formateurs/{{ $formateur->id }}/modifier" class="btn btn-primary btn-sm">Modifier</a>
                        <form action="{{ route('formateurs.supprimer', $formateur->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce formateur ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Ajouter le lien vers le fichier Bootstrap JavaScript (optionnel, si vous avez besoin de fonctionnalités JavaScript de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
