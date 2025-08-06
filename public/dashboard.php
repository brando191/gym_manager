<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['usuario_id'])) {
    // No está logueado, redirigir al login
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Gym Manager</title>
</head>
<body>
    <h1>Bienvenido al Dashboard, <?php echo htmlspecialchars($_SESSION['usuario_nombre']); ?>!</h1>

    <p>Aquí puedes agregar la funcionalidad principal de tu sistema.</p>

    <p><a href="logout.php">Cerrar sesión</a></p>
</body>
</html>
