<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "dealzone";

// Créer une connexion
$conn = new mysqli($host, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

?>