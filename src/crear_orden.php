<?php include 'auth.php'; include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es"><head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="bg-light"><div class="container mt-5 col-md-6"><div class="card p-4">
<h2>Nueva Orden</h2>
<form action="guardar_orden.php" method="POST">
    <label>Seleccionar Cliente:</label>
    <select name="id_vehiculo" id="select_cliente" class="form-control mb-3" required onchange="actualizarPlaca()">
        <option value="">Seleccione un cliente...</option>
        <?php 
        // Obtenemos clientes y sus vehículos
        $data = $pdo->query("SELECT v.id_vehiculo, v.placa, c.nombre FROM vehiculos v JOIN clientes c ON v.id_cliente = c.id_cliente");
        foreach($data as $row) {
            echo "<option value='{$row['id_vehiculo']}' data-placa='{$row['placa']}'>{$row['nombre']}</option>";
        }
        ?>
    </select>
    
    <label>Placa del Vehículo:</label>
    <input type="text" id="campo_placa" class="form-control mb-3" readonly placeholder="La placa aparecerá aquí...">

    <label>Descripción del servicio:</label>
    <textarea name="descripcion" class="form-control mb-3" required></textarea>
    
    <button type="submit" class="btn btn-primary w-100">Registrar Orden</button>
    <a href="index.php" class="btn btn-secondary w-100 mt-2">Regresar</a>
</form>
</div></div>

<script>
function actualizarPlaca() {
    var select = document.getElementById('select_cliente');
    var inputPlaca = document.getElementById('campo_placa');
    var selectedOption = select.options[select.selectedIndex];
    inputPlaca.value = selectedOption.getAttribute('data-placa');
}
</script>
</body></html>