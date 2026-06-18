<?php
// Configuración de la conexión
$host = 'localhost';
$db   = 'taller_mecanico';
$user = 'root';
$pass = '';

try {
    // Crear conexión usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    
    // Configurar errores para que sean visibles y fáciles de depurar
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Configurar el modo de búsqueda por defecto (opcional, pero recomendado)
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // Si hay error, detiene la ejecución y muestra qué está fallando
    die("Error de conexión a la base de datos: " . $e->getMessage());
}
?>