<?php
include 'auth.php';
include 'db.php';

// Si recibimos el ID, cargamos los datos actuales
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare("SELECT * FROM ordenes WHERE id_orden = ?");
    $stmt->execute([$_GET['id']]);
    $orden = $stmt->fetch();
}

// Si se envía el formulario, actualizamos la base de datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $pdo->prepare("UPDATE ordenes SET descripcion = ? WHERE id_orden = ?");
    $stmt->execute([$_POST['descripcion'], $_POST['id']]);
    header("Location: gestion_ordenes.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="bg-light">
    <div class="container mt-5 col-md-6">
        <div class="card p-4 shadow">
            <h2>Editar Orden #<?= $orden['id_orden'] ?></h2>
            <form method="POST">
                <input type="hidden" name="id" value="<?= $orden['id_orden'] ?>">
                <label>Descripción:</label>
                <textarea name="descripcion" class="form-control mb-3" required><?= htmlspecialchars($orden['descripcion']) ?></textarea>
                <button type="submit" class="btn btn-warning w-100">Guardar Cambios</button>
                <a href="gestion_ordenes.php" class="btn btn-secondary w-100 mt-2">Cancelar</a>
            </form>
        </div>
    </div>
</body>
</html>