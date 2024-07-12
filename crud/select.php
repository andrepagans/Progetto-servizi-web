<?php

require_once('../db/config.php');

$sql = 'SELECT * FROM libri';

if ($result = $connessione->query($sql)) {
    $data = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $tmp;
            $tmp['id'] = $row['id'];
            $tmp['titolo'] = $row['titolo'];
            $tmp['autore'] = $row['autore'];
            $tmp['genere'] = $row['genere'];
            $tmp['data_di_pubblicazione'] = $row['data_di_pubblicazione'];
            $tmp['copie_disponibili'] = $row['copie_disponibili'];
            array_push($data, $tmp);
        }
        echo json_encode($data);
    } else {
        echo "Non ci sono righe disponibili";
    }
} else {
    echo "Errore nell'esecuzione di $sql. " . $connessione->error;
}
