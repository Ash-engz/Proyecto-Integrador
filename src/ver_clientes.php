<?php include 'db.php'; include 'auth.php'; ?>
<div class="container mt-4">
    <h2>Consulta de Clientes</h2>
    <table class="table table-bordered">
        <tr><th>Nombre</th><th>Teléfono</th></tr>
        <?php
        $res = $pdo->query("SELECT * FROM clientes");
        foreach($res as $r) echo "<tr><td>{$r['nombre']}</td><td>{$r['telefono']}</td></tr>";
        ?>
    </table>
    <a href="index.php" class="btn btn-secondary">Volver al inicio</a>
</div>