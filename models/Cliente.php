<?php
class Cliente {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $sql = "SELECT * FROM clientes";
        return $this->conn->query($sql);
    }

    public function insertar($nombre,$apellido,$email,$telefono){
          $stmt = $this->conn->prepare("INSERT INTO clientes (nombre, apellido, email, telefono) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nombre, $apellido, $email, $telefono);
        return $stmt->execute();
    }

}
?>
