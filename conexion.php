<?php
$conexion = new mysqli("localhost", "root", "", "abm_demo");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
