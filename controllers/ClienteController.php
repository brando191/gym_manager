<?php
include_once __DIR__ . '/../config/database.php';
include_once __DIR__ . '/../models/Cliente.php';

// Obtener la conexión usando la función conectar() en database.php
$conn = conectar();

$clienteModel = new Cliente($conn);
$clientes = $clienteModel->getAll();

function guardarCliente($nombre, $apellido, $email, $telefono) {
    global $conn;  // Usar la variable $conn definida arriba
    $cliente = new Cliente($conn);  // PASAR $conn aquí
    return $cliente->insertar($nombre, $apellido, $email, $telefono);
}
?>
