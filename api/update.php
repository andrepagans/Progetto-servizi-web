<?php
header('Content-Type: application/json');
require_once('../db/config.php');

$data = json_decode(file_get_contents('php://input'), true);
$id = $connessione->real_escape_string($data['id']);
$copie_disponibili = $connessione->real_escape_string($data['copie_disponibili']);

$sql = "UPDATE LIBRI SET copie_disponibili='$copie_disponibili' WHERE id='$id'";

if ($connessione->query($sql) === true) {
    echo json_encode(["messaggio" => "Libro modificato con successo", "response" => 1]);
} else {
    echo json_encode(["messaggio" => $connessione->error, "response" => 0]);
}

$connessione->close();
?>
