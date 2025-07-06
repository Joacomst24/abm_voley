<?php
include("conexion.php");
$dni = $_GET['dni'];
$jugador = $conexion->query("SELECT * FROM jugadores WHERE DNI = $dni")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $altura = $_POST['altura'];
  $peso = $_POST['peso'];
  $experiencia = $_POST['experiencia'];
  $genero = $_POST['genero'];
  $fdn = $_POST['fdn'];
  $posicion = $_POST['posicion'];
  $num_tel= $_POST['num_tel'];

  $sql = "UPDATE jugadores SET Nombre='$nombre', Apellido='$apellido', Altura='$altura', Peso='$peso',
          Experiencia='$experiencia', Genero='$genero', Fdn='$fdn', Posicion='$posicion', num_tel='$num_tel'
          WHERE DNI=$dni";

  $conexion->query($sql);
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Editar jugador</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h2>Editar jugador</h2>
<form method="post">
  Nombre: <input type="text" name="nombre" value="<?= $jugador['Nombre'] ?>" required><br>
  Apellido: <input type="text" name="apellido" value="<?= $jugador['Apellido'] ?>" required><br>
  Altura: <input type="number" name="altura" value="<?= $jugador['Altura'] ?>" step="0.01" required><br>
  Peso: <input type="number" name="peso" value="<?= $jugador['Peso'] ?>" step="0.01" required><br>
  Experiencia:
  <select name="experiencia">
    <option value="Si" <?= $jugador['Experiencia'] == 'Si' ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= $jugador['Experiencia'] == 'No' ? 'selected' : '' ?>>No</option>
  </select><br>
  Género:
  <select name="genero">
    <option value="M" <?= $jugador['Genero'] == 'M' ? 'selected' : '' ?>>M</option>
    <option value="F" <?= $jugador['Genero'] == 'F' ? 'selected' : '' ?>>F</option>
  </select><br>
  Fecha de nacimiento: <input type="date" name="fdn" value="<?= $jugador['Fdn'] ?>" required><br>
  Telefono: <input type="number" name="num_tel" value="<?= $jugador['num_tel'] ?>" required><br>
  Posición:
  <select name="posicion">
    <?php
    $posiciones = ["armador", "central", "opuesto", "punta", "libero"];
    foreach ($posiciones as $pos) {
        $selected = $jugador['Posicion'] == $pos ? 'selected' : '';
        echo "<option value='$pos' $selected>" . ucfirst($pos) . "</option>";
    }
    
    ?>
  </select><br>
  <input type="submit" value="Actualizar">
</form>

</body>
</html>
