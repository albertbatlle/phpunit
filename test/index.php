<?php
  require_once "Arrays.php";
  $datos = [3,5,"dd",true,67];
  print_r($datos);
  echo "<hr>";
  $res = extraerNumerosArray($datos);
  print_r($res);
?>
