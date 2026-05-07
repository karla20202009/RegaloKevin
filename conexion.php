<?php
// Datos de tu panel de InfinityFree (MySQL Databases)
$host = "sql213.infinityfree.com"; // Reemplaza el XXX por el tuyo
$user = "if0_41851722";           // Tu usuario de MySQL
$pass = "0GkHhvN1WKw3X";         // Tu contraseña de la cuenta
$db   = "if0_41851722_kvn";    // El nombre de la base de datos que creaste

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
