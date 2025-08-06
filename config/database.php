<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "gym_manager";

function conectar() {
    global $host, $user, $pass, $dbname;
    $conn = new mysqli($host, $user, $pass, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    $conn->set_charset("utf8mb4");
    return $conn;
}
