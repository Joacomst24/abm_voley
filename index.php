<?php
include("conexion.php");
$resultado = $conexion->query("SELECT * FROM jugadores");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Jugadores</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h2>Jugadores registrados en el club</h2>
<div class="centrado">
  <a href="agregar.php" class="boton">Agregar nuevo jugador</a>
</div>
<table>
  <tr>
    <th>Nombre</th><th>Apellido</th><th>DNI</th><th>Altura</th><th>Peso</th>
    <th>Experiencia</th><th>Género</th><th>F. Nacimiento</th><th>Posición</th><th>Contacto</th><th>Acciones</th>
  </tr>
  <?php while($row = $resultado->fetch_assoc()) { ?>
    <tr>
      <td><?= $row['Nombre'] ?></td>
      <td><?= $row['Apellido'] ?></td>
      <td><?= $row['DNI'] ?></td>
      <td><?= $row['Altura'] ?></td>
      <td><?= $row['Peso'] ?></td>
      <td><?= $row['Experiencia'] ?></td>
      <td><?= $row['Genero'] ?></td>
      <td><?= $row['Fdn'] ?></td>
      <td><?= $row['Posicion'] ?></td>
      <td><?= $row['num_tel'] ?></td>
      <td>
        <a href="editar.php?dni=<?= $row['DNI'] ?> " class="boton2">Editar</a> |
        <a href="eliminar.php?dni=<?= $row['DNI'] ?>" onclick="return confirm('¿Eliminar?')" class="boton2">Eliminar</a>
      </td>
    </tr>
  <?php } ?>
</table>

</body>
</html>
