<?php
// 1. Incluir archivos necesarios
include 'db.php';
include 'auth.php'; // Protección de acceso

// 2. Consulta con JOIN para traer el nombre del cliente
$query = "SELECT v.id_vehiculo, v.placa, v.marca, v.modelo, c.nombre as nombre_cliente 
          FROM vehiculos v
          JOIN clientes c ON v.id_cliente = c.id_cliente";

$resultado = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Vehículos</title>
</head>
<body>
    <h1>Listado de Vehículos registrados</h1>
    <a href="crear_vehiculo.php">+ Registrar nuevo vehículo</a>
    <br><br>

    <table border="1">
        <thead>
            <tr>
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Propietario</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while($row = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>".$row['placa']."</td>";
                echo "<td>".$row['marca']."</td>";
                echo "<td>".$row['modelo']."</td>";
                echo "<td>".$row['nombre_cliente']."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>