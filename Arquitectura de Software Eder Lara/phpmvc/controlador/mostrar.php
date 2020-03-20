<?php
  require '../modelo/buscar.php';
  if (isset($_POST['btnmostrar'])) {
    // Capturamos la info de las entradas:
    $usuario = $_POST['producto'];
    // Se lo pasamos al modelo para que lo busque:
    $resultado = buscar($usuario);

    echo $resultado;

  }
?>
