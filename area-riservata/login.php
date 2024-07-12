<?php

require_once('../db/config.php');

$username = $connessione->real_escape_string($_POST['username']);
$password = $connessione->real_escape_string($_POST['password']);

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $sql_select = "SELECT * FROM admin WHERE username='$username'";
    if ($result = $connessione->query($sql_select)) {
        if ($result->num_rows == 1) {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if (password_verify($password, $row['password'])) {
                session_start();

                $_SESSION['loggato'] = true;
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];

                header("location: ../crud/index.php");
            } else {
                echo "la password non è corretta";
            }
        } else {
            echo "non ci sono account con quello username";
        }
    } else {
        echo "Errore in fase di login";
    }

    $connessione->close();
}
