<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "biblioteca";

$connessione = new mysqli($host, $user, $password, $database);

if ($connessione === false) {
    die("Errore di connessione " . $connessione->connect_error);
}
