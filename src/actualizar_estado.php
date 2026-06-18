<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $pdo->prepare("UPDATE ordenes SET estado = ? WHERE id_orden = ?");
    $stmt->execute([$_POST['estado'], $_POST['id']]);
    header("Location: gestion_ordenes.php");
}
?>