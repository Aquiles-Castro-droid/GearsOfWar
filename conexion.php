<?php
$conexion = mysqli_connect(
    "sql302.infinityfree.com",
    "if0_40475217",
    "Coneclochas2023",
    "if0_40475217_interactivo"
);

if(!$conexion){
    die("Error de conexión: " . mysqli_connect_error());
}
?>
