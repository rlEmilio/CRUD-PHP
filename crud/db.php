<?php
session_start();

// Creación de la conexión
$conn = mysqli_connect(
  'servidor',
  'usuario',
  'contraseña',
  'base de datos'
) or die(mysqli_error($mysqli));
?>
