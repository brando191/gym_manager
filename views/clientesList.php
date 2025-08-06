<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Clientes</title>
</head>
<body>
    <h1>Lista de Clientes</h1>
    <ul>
        <?php while ($row = $clientes->fetch_assoc()) { ?>
            <li><?= htmlspecialchars($row['nombre']) ?></li>
        <?php } ?>
    </ul>
</body>
</html>
