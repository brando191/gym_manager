<?php
session_start();

include_once '../controllers/UsuarioController.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $password = $_POST['password'] ?? '';

    // Intentar hacer login y obtener datos del usuario
    $userData = login($usuario, $password);

    if ($userData) {
        // Guardar datos en sesión
        $_SESSION['usuario_id'] = $userData['id'];
        $_SESSION['usuario_nombre'] = $userData['nombre'];
        $_SESSION['usuario_usuario'] = $userData['usuario'];

        // Redirigir al dashboard
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Gym Manager</title>
</head>
<body>
    <h2>Iniciar sesión</h2>

    <?php if ($error): ?>
        <p style="color:red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <label>Usuario:</label><br>
        <input type="text" name="usuario" required><br><br>

        <label>Contraseña:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Ingresar</button>
    </form>
</body>
</html>
