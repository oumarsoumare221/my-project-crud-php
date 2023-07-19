<!DOCTYPE html>
<html>

<head>
    <title>Ajouter un formateur</title>
    <!-- Ajouter les liens vers les fichiers Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5 d-flex flex-column align-items-center">
        <h1 class="mb-4">Ajouter un formateur</h1>
        <form action="/formateurs/ajouter" method="POST" class="w-50">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom :</label>
                <input type="text" name="nom" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom :</label>
                <input type="text" name="prenom" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="filiere" class="form-label">Filière :</label>
                <input type="text" name="filiere" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="matieres" class="form-label">Matières :</label>
                <input type="text" name="matieres" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter formateur</button>
            <button type="button" class="btn btn-outline-warning mt-3"><a href="/formateurs" class="text-decoration-none text-dark">REVENIR EN ARRIÈRE</a></button>
        </form>
    </div>

    <!-- Ajouter le lien vers le fichier Bootstrap JavaScript (optionnel, si vous avez besoin de fonctionnalités JavaScript de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>