<?php include 'auth.php'; include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es"><head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="bg-light"><div class="container mt-4">
<h2>Gestión de Mecánicos</h2>
<a href="crear_mecanico.php" class="btn btn-success mb-3">Nuevo Mecánico</a>
<table class="table bg-white"><tr><th>Nombre</th><th>Especialidad</th><th>Acciones</th></tr>
<?php foreach($pdo->query("SELECT * FROM mecanicos") as $m): ?>
<tr><td><?=$m['nombre']?></td><td><?=$m['especialidad']?></td>
<td><a href="borrar.php?tabla=mecanicos&id=<?=$m['id_mecanico']?>" class="btn btn-danger btn-sm">Eliminar</a></td></tr>
<?php endforeach; ?></table></div></body></html>