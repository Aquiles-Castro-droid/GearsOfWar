<?php
include("conexion.php");

if (!empty($_POST['nombre']) && !empty($_POST['comentario'])) {
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $comentario = mysqli_real_escape_string($conexion, $_POST['comentario']);

    $sql = "INSERT INTO libro_visitas (nombre, comentario) VALUES ('$nombre', '$comentario')";
    mysqli_query($conexion, $sql);
}


$consulta = mysqli_query($conexion, "SELECT * FROM libro_visitas ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<style>
  body {
    background:#111;
    color:#ddd;
    font-family:Arial;
    padding:15px;
  }
  .coment {
    background:#1b1b1c;
    padding:12px;
    margin-bottom:10px;
    border-radius:8px;
    border-left:4px solid #f04a3e;
  }
  .nombre { color:#f04a3e; font-weight:bold; }
  .fecha { font-size:12px; color:#aaa; }
</style>
</head>
<body>

<h2>Comentarios</h2>

<?php while($row = mysqli_fetch_assoc($consulta)): ?>
  <div class="coment">
      <div class="nombre"><?php echo $row['nombre']; ?></div>
      <div class="texto"><?php echo $row['comentario']; ?></div>
      <div class="fecha"><?php echo $row['fecha']; ?></div>
  </div>
<?php endwhile; ?>

</body>
</html>
