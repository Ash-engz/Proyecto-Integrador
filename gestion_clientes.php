<?php include 'auth.php'; include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es"><head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="bg-light"><div class="container mt-4">
<h2>Gestión de Clientes</h2>
<a href="crear_cliente.php" class="btn btn-success mb-3">Nuevo Cliente</a>
<a href="index.php" class="btn btn-secondary mb-3">Inicio</a>
<table class="table bg-white"><tr><th>Nombre</th><th>Teléfono</th><th>Acciones</th></tr>
<?php foreach($pdo->query("SELECT * FROM clientes") as $c): ?>
<tr><td><?=$c['nombre']?></td><td><?=$c['telefono']?></td>
<td><a href="borrar.php?tabla=clientes&id=<?=$c['id_cliente']?>" class="btn btn-danger btn-sm">Eliminar</a></td></tr>
<?php endforeach; ?></table></div></body></html>