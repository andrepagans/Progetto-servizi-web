<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>

<body class="custom-bg">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand view-copies-navbar-brand">Biblioteca Online</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Elenco Libri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../apidoc.html">Documentazione</a>
                </li>
            </ul>
            <a href="../area-riservata/login.html" class="btn btn-danger ml-3">Disconnetti</a>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <!-- <h1 class="h3">Biblioteca</h1> -->
        </div>

        <button id="nuovo-libro" class="btn btn-primary mb-4">Inserisci Libro</button>

        <div id="form-container" class="mb-4 bg-light">
            <form id="libro-form" class="card card-body">
                <div class="form-group">
                    <label for="titolo">Titolo:</label>
                    <input type="text" id="titolo" name="titolo" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="autore">Autore:</label>
                    <input type="text" id="autore" name="autore" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="genere">Genere:</label>
                    <input type="text" id="genere" name="genere" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="data_di_pubblicazione">Data di pubblicazione:</label>
                    <input type="date" id="data_di_pubblicazione" name="data_di_pubblicazione" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="copie_disponibili">Copie disponibili:</label>
                    <input type="number" id="copie_disponibili" name="copie_disponibili" class="form-control" required min="1" step="1">
                </div>

                <button type="submit" class="btn btn-success">Aggiungi Libro</button>
            </form>
        </div>

        <div id="modifica-form-container" class="mb-4 bg-light">
            <form id="modifica-libro-form" class="card card-body">
                <input type="hidden" id="modifica-id" name="id">
                <div class="form-group">
                    <label for="modifica-copie_disponibili">Copie disponibili:</label>
                    <input type="number" id="modifica-copie_disponibili" name="copie_disponibili" class="form-control" required min="1" step="1">
                </div>
                <button type="submit" class="btn btn-warning">Modifica Libro</button>
            </form>
        </div>

        <div id="tabella-container" class="bg-light"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../crud/app.js"></script>
</body>

</html>