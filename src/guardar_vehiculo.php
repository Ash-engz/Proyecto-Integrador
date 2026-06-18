<?php
include 'db.php'; include 'auth.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $pdo->prepare("INSERT INTO vehiculos (id_cliente, placa) VALUES (?, ?)");
    $stmt->execute([$_POST['id_cliente'], $_POST['placa']]);
    header("Location: index.php");
}
?>