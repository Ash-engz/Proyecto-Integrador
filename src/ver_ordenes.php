<?php include 'auth.php'; include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es"><head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="bg-light"><div class="container mt-4">
<h2>Gestión de Órdenes</h2><a href="index.php" class="btn btn-secondary mb-3">Regresar</a>
<table class="table bg-white"><thead><tr><th>ID</th><th>Descripción</th><th>Estado</th><th>Acciones</th></tr></thead>
<tbody><?php foreach($pdo->query("SELECT * FROM ordenes") as $o): ?>
<tr><td><?=$o['id_orden']?></td><td><?=$o['descripcion']?></td><td><?=$o['estado']?></td>
<td>
    <a href="actualizar_estado.php?id=<?=$o['id_orden']?>&estado=en proceso" class="btn btn-sm btn-warning">Proceso</a>
    <a href="actualizar_estado.php?id=<?=$o['id_orden']?>&estado=finalizado" class="btn btn-sm btn-success">Finalizar</a>
</td></tr><?php endforeach; ?></tbody></table></div></body></html>