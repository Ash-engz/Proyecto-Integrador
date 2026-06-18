<?php
include 'db.php';
include 'auth.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $pdo->prepare("INSERT INTO mecanicos (nombre, especialidad) VALUES (?, ?)");
    $stmt->execute([$_POST['nombre'], $_POST['especialidad']]);
    header("Location: index.php?status=mecanico_guardado");
}
?>