<?php
include_once '../config/database.php';
include_once '../models/Usuario.php';

// Función para login
function login($usuario, $password) {
    $conn = conectar(); // Llama a la función para obtener la conexión
    $usuarioModel = new Usuario($conn);

    $userData = $usuarioModel->validarLogin($usuario, $password);

    if ($userData) {
        return $userData;
    } else {
        return false;
    }
}

// ✅ Esta función debe estar FUERA del login()
function listarUsuarios() {
    $conn = conectar();
    $usuarioModel = new Usuario($conn);
    return $usuarioModel->getAll();
}
?>
