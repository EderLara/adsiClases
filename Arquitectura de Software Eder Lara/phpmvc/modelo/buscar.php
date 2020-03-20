<?php
require_once 'conexion.php';

  function buscar($dato){
    if ($dato == 'Salas') {
      // code...
      $msj = "Se han encontrado 134 resultados";
    }else {
      $msj =  "Ya no hay existencias";
    }
    return $msj;
  }

?>
