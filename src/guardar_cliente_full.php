<?php
include 'db.php'; 
include 'auth.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Guardar Cliente
        $stmt1 = $pdo->prepare("INSERT INTO clientes (nombre, telefono) VALUES (?, ?)");
        $stmt1->execute([$_POST['nombre'], $_POST['telefono']]);
        $id_cliente = $pdo->lastInsertId();
        
        // Guardar Vehículo
        $stmt2 = $pdo->prepare("INSERT INTO vehiculos (id_cliente, placa) VALUES (?, ?)");
        $stmt2->execute([$id_cliente, $_POST['placa']]);
        
        header("Location: gestion_clientes.php");
        exit();
    } catch (Exception $e) {
        echo "Error al guardar: " . $e->getMessage();
    }
}
?>