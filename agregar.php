<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $dni = $_POST['dni'];
  $altura = $_POST['altura'];
  $peso = $_POST['peso'];
  $experiencia = $_POST['experiencia'];
  $genero = $_POST['genero'];
  $fdn = $_POST['fdn'];
  $posicion = $_POST['posicion'];
  $num_tel= $_POST['num_tel'];

  $sql = "INSERT INTO jugadores (Nombre, Apellido, DNI, Altura, Peso, Experiencia, Genero, Fdn, Posicion, num_tel)
          VALUES ('$nombre', '$apellido', '$dni', '$altura', '$peso', '$experiencia', '$genero', '$fdn', '$posicion', '$num_tel')";

  $conexion->query($sql);
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Agregar jugador</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h1>Agregar jugador</h1>
<form method="post">
  Nombre: <input type="text" name="nombre" required><br>
  Apellido: <input type="text" name="apellido" required><br>
  DNI: <input type="number" name="dni" required><br>
  Altura: <input type="number" name="altura" step="0.01" required><br>
  Peso: <input type="number" name="peso" step="0.01" required><br>
  Experiencia:
  <select name="experiencia">
    <option value="Si">Sí</option>
    <option value="No">No</option>
  </select><br>
  Género:
  <select name="genero">
    <option value="M">M</option>
    <option value="F">F</option>
  </select><br>
  Fecha de nacimiento: <input type="date" name="fdn" required><br>
  Posición:
  <select name="posicion">
    <option value="armador">Armador</option>
    <option value="central">Central</option>
    <option value="opuesto">Opuesto</option>
    <option value="punta">Punta</option>
    <option value="libero">Líbero</option>
  </select><br>
  Numero de telefono: <input type="number" name="num_tel" min=0 required><br>
  <input type="submit" value="Agregar">
</form>

</body>
</html>
