<?php
include 'db.php'; include 'auth.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $pdo->prepare("INSERT INTO ordenes (id_vehiculo, descripcion, estado) VALUES (?, ?, 'pendiente')");
    $stmt->execute([$_POST['id_vehiculo'], $_POST['descripcion']]);
    header("Location: ver_ordenes.php");
    exit();
}
?>