<?php

require_once('../db/config.php');

$titolo = $connessione->real_escape_string($_POST['titolo']);
$autore = $connessione->real_escape_string($_POST['autore']);
$genere = $connessione->real_escape_string($_POST['genere']);
$data_di_pubblicazione = $connessione->real_escape_string($_POST['data_di_pubblicazione']);
$copie_disponibili = $connessione->real_escape_string($_POST['copie_disponibili']);

$sql = "INSERT INTO LIBRI (titolo, autore, genere, data_di_pubblicazione, copie_disponibili) VALUES ('$titolo', '$autore', '$genere', '$data_di_pubblicazione', '$copie_disponibili')";

if ($connessione->query($sql) === true) {
    $data = [
        "messaggio" => "Libro inserito con successo",
        "response" => 1
    ];
    echo json_encode($data);
} else {
    $data = [
        "messaggio" => $connessione->error,
        "response" => 0
    ];
    echo json_encode($data);
}
