<?php
include_once 'config/database.php';

$conn = conectar();

$nombre = 'Administrador';
$usuario = 'admin';
$password_plain = '1234';

// Hashear contraseña
$password_hash = password_hash($password_plain, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nombre, usuario, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nombre, $usuario, $password_hash);

if ($stmt->execute()) {
    echo "Usuario creado con éxito.";
} else {
    echo "Error al crear usuario: " . $stmt->error;
}
?>
