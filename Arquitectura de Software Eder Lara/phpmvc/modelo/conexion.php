<?php
// Definimos los parámetros de la conexion:
$host = "localhost";
$user = "root";
$pasw = "";
$port = 3306;
$dbna ="test";

// Cargamos el objeto con los parámetros de la conexión:
$con = new mysqli($host, $user, $pasw, $dbna, $port)
       or die ('No se puede establecer conexión con la base de datos' .mysqli_connect_error());
if (mysqli_connect_error()) {
  // code...
  echo "No se ha establecido la conexión a la base de datos";
} else {
  echo "Se ha establecido la conexión a la base de datos";
}
?>
