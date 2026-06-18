<?php
session_start();
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE username = ?");
    $stmt->execute([$_POST['username']]);
    $u = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($u && $_POST['password'] == $u['password']) {
        $_SESSION['usuario_id'] = $u['id'];
        $_SESSION['username'] = $u['username'];
        header("Location: index.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="es"><head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="bg-light"><div class="container mt-5 col-md-4"><form method="POST" class="card p-4 shadow">
<h3>Login</h3>
<input type="text" name="username" class="form-control mb-2" placeholder="Usuario" required>
<input type="password" name="password" class="form-control mb-2" placeholder="Contraseña" required>
<button type="submit" class="btn btn-primary w-100">Entrar</button></form></div></body></html>