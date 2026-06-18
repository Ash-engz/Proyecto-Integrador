<?php
include 'db.php'; include 'auth.php';
$tabla = $_GET['tabla']; 
$id = $_GET['id'];
$col = ($tabla == 'clientes') ? 'id_cliente' : (($tabla == 'ordenes') ? 'id_orden' : 'id_mecanico');
$stmt = $pdo->prepare("DELETE FROM $tabla WHERE $col = ?");
$stmt->execute([$id]);
header("Location: gestion_$tabla.php");
?>