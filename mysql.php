<?php 
$conex = mysqli_connect("192.168.0.15:3306", "jv", "M4p4ch4$", "mybd");  
  if (!$conex) {
  echo "Error: No se pudo conectar al servidor MySQL.".PHP_EOL;
  exit;
  }
  echo "Conexion realizada con exito." . PHP_EOL;
  
  mysqli_close($conex);
?> 