<?php
header('Content-Type: application/json');
require_once('../db/config.php');

$data = json_decode(file_get_contents('php://input'), true);
$titolo = $connessione->real_escape_string($data['titolo']);
$autore = $connessione->real_escape_string($data['autore']);
$genere = $connessione->real_escape_string($data['genere']);
$data_di_pubblicazione = $connessione->real_escape_string($data['data_di_pubblicazione']);
$copie_disponibili = $connessione->real_escape_string($data['copie_disponibili']);

$sql = "INSERT INTO LIBRI (titolo, autore, genere, data_di_pubblicazione, copie_disponibili) VALUES ('$titolo', '$autore', '$genere', '$data_di_pubblicazione', '$copie_disponibili')";

if ($connessione->query($sql) === true) {
    echo json_encode(["messaggio" => "Libro inserito con successo", "response" => 1]);
} else {
    echo json_encode(["messaggio" => $connessione->error, "response" => 0]);
}

$connessione->close();
?>
