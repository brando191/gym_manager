<?php
class Usuario {
    private $conn;

    // Recibe la conexión a la base de datos
    public function __construct($db) {
        $this->conn = $db;
    }

    // Validar login con usuario y contraseña
    public function validarLogin($usuario, $password) {
        $query = "SELECT id, nombre, usuario, password FROM usuarios WHERE usuario = ? LIMIT 1";
        $stmt = $this->conn->prepare($query);

        if (!$stmt) {
            // Error al preparar consulta
            return false;
        }

        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();

            // Verificar contraseña (debe estar hasheada en BD)
            if (password_verify($password, $user['password'])) {
                return $user; // Login exitoso, devuelve datos usuario
            }
        }

        return false; // Usuario no encontrado o password incorrecta
    }
    public function getAll() {
        $sql = "SELECT id, nombre, usuario, creado_en FROM usuarios ORDER BY id ASC";
        $result = $this->conn->query($sql);
        return $result;
    }
}
?>
