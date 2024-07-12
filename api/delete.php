<?php
header('Content-Type: application/json');
require_once('../db/config.php');

$data = json_decode(file_get_contents('php://input'), true);
$id = $connessione->real_escape_string($data['id']);

$sql = "DELETE FROM LIBRI WHERE id='$id'";

if ($connessione->query($sql) === true) {
    echo json_encode(["messaggio" => "Libro eliminato con successo", "response" => 1]);
} else {
    echo json_encode(["messaggio" => $connessione->error, "response" => 0]);
}

$connessione->close();
?>
