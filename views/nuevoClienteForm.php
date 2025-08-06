<!-- views/nuevoClienteForm.php -->
<h2>REGISTRAR NUEVO GYMBRO </h2>
<form action="../public/nuevo_cliente.php" method="POST">
    <label>NOMBRE:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>APELLIDO:</label><br>
    <input type="text" name="apellido" required><br><br>

    <label>CORREO ELECTRONICO:</label><br>
    <input type="email" name="email"><br><br>

    <label>Teléfono:</label><br>
    <input type="text" name="telefono"><br><br>

    <button type="submit">YEAAH BUDDY!!!!!
    </button>
</form>
