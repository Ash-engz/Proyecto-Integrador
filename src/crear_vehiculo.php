<?php include 'db.php'; include 'auth.php'; ?>
<!DOCTYPE html>
<html lang="es"><head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="bg-light"><div class="container mt-5 col-md-6"><div class="card p-4"><h2>Nuevo Vehículo</h2>
<form action="guardar_vehiculo.php" method="POST">
<select name="id_cliente" class="form-control mb-3" required><?php 
$c = $pdo->query("SELECT id_cliente, nombre FROM clientes");
foreach($c as $row) echo "<option value='{$row['id_cliente']}'>{$row['nombre']}</option>";?></select>
<input type="text" name="placa" class="form-control mb-3" placeholder="Placa" required>
<button type="submit" class="btn btn-primary w-100">Guardar Vehículo</button>
<a href="index.php" class="btn btn-secondary w-100 mt-2">Regresar</a></form></div></div></body></html>