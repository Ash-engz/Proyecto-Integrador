<?php include 'auth.php'; include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es"><head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="bg-light"><div class="container mt-4">
<h2>Gestión de Órdenes</h2>
<a href="crear_orden.php" class="btn btn-success mb-3">Nueva Orden</a>
<table class="table bg-white"><tr><th>Descripción</th><th>Estado</th><th>Acciones</th></tr>
<?php foreach($pdo->query("SELECT * FROM ordenes") as $o): ?>
<tr><td><?=$o['descripcion']?></td><td><?=$o['estado']?></td>
<td>
    <a href="actualizar_estado.php?id=<?=$o['id_orden']?>&estado=en proceso" class="btn btn-warning btn-sm">Proceso</a>
    <a href="borrar.php?tabla=ordenes&id=<?=$o['id_orden']?>" class="btn btn-danger btn-sm">Eliminar</a>
</td></tr><?php endforeach; ?></table></div></body></html>