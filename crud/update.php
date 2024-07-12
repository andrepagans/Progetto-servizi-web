<?php

require_once('../db/config.php');

$id = $_POST['id'];
$copie_disponibili = $_POST['copie_disponibili'];

$sql = "UPDATE libri SET copie_disponibili=$copie_disponibili WHERE id=$id";
if ($connessione->query($sql) === true) {
    $data = [
        "messaggio" => "Num° copie aggiornato con successo",
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