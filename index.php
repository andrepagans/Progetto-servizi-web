<!DOCTYPE html>
<html class="view-copies-html" lang="it">

<head>
    <meta charset="UTF-8">
    <title>Biblioteca Online - Visualizza Copie Disponibili</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="./style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>

<body class="view-copies-body">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand view-copies-navbar-brand">Biblioteca Online</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="crud/index.php">Elenco Libri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="apidoc.html">Documentazione</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="view-copies-bg">
        <div class="view-copies-overlay">
            <h1 class="view-copies-text-center">Benvenuti nella Biblioteca Online</h1>
            <p class="view-copies-text-center">Inserisci l'ID del libro desiderato per vedere quante copie sono disponibili.</p>
            <form id="viewCopiesForm">
                <div class="form-group">
                    <label for="bookId">ID del Libro:</label>
                    <input type="number" id="bookId" name="bookId" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Visualizza Copie Disponibili</button>
            </form>
            <div id="copiesAvailable"></div>
        </div>
    </div>
    <script src="./app.js"></script>
</body>

</html>
