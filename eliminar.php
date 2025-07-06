<?php
include("conexion.php");
$dni = $_GET['dni'];
$conexion->query("DELETE FROM jugadores WHERE DNI = $dni");
header("Location: index.php");
?>
