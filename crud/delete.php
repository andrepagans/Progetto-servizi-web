<?php

require_once('../db/config.php');

$id = $_POST['id'];

$sql = "DELETE FROM libri WHERE id= $id";
if ($connessione->query($sql) === true) {
    $data = [
        "messaggio" => "Libro eliminato con successo",
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

?>