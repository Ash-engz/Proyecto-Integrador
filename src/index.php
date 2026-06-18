<?php
// index.php
include 'db.php';
include 'auth.php'; // Protección: si no hay sesión, redirige a login.php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Taller Mecánico - Inicio</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        .menu { display: flex; gap: 20px; margin-top: 20px; }
        .menu a { padding: 10px 20px; background: #007bff; color: white; text-decoration: none; border-radius: 5px; }
        .menu a:hover { background: #0056b3; }
    </style>
</head>
<body>
    <h1>Bienvenido al Sistema de Gestión - Taller Garage GT</h1>
    <p>Seleccione una opción para comenzar a gestionar:</p>

    <div class="menu">
        <a href="ver_clientes.php">Clientes</a>
        <a href="ver_vehiculos.php">Vehículos</a>
        <a href="gestion_mecanicos.php">Mecánicos</a>
        <a href="ver_ordenes.php">Órdenes de Servicio</a>
    </div>

    <hr>
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>