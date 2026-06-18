<?php include 'auth.php'; include 'db.php'; 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $pdo->prepare("INSERT INTO mecanicos (nombre, especialidad) VALUES (?, ?)");
    $stmt->execute([$_POST['nombre'], $_POST['especialidad']]);
    header("Location: gestion_mecanicos.php"); exit();
} ?>
<!DOCTYPE html>
<html lang="es"><head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="bg-light"><div class="container mt-5 col-md-4">
<form method="POST" class="card p-4"><h3>Nuevo Mecánico</h3>
<input type="text" name="nombre" class="form-control mb-2" placeholder="Nombre" required>
<input type="text" name="especialidad" class="form-control mb-2" placeholder="Especialidad">
<button class="btn btn-primary w-100">Guardar</button>
<a href="gestion_mecanicos.php" class="btn btn-secondary w-100 mt-2">Regresar</a></form></div></body></html>