<?php
header('Content-Type: application/json');
require_once('../db/config.php');

if (isset($_GET['id'])) {
    $id = $connessione->real_escape_string($_GET['id']);
    $sql = "SELECT * FROM LIBRI WHERE id = '$id'";
    $result = $connessione->query($sql);

    if ($result->num_rows > 0) {
        $libro = $result->fetch_assoc();
        echo json_encode($libro);
    } else {
        echo json_encode(["messaggio" => "Libro non trovato", "response" => 0]);
    }
} else {
    $sql = "SELECT * FROM LIBRI";
    $result = $connessione->query($sql);

    $libri = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $libri[] = $row;
        }
    }

    echo json_encode($libri);
}

$connessione->close();
?>
