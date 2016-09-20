<?php

  /****************** ARRAY MAYOR Y MENOR *****************/
  $cantidad=array(3,4,6,1,65,-3,6,10);
  $i=0;
  $menor=$cantidad[$i];
  $mayor=$cantidad[$i];
  while($i<=7)
  {
    if($menor>$cantidad[$i])
    {
      $menor=$cantidad[$i];
    }
    $i=$i+1;
  }
  echo "$menor <br>";
  $cantidad=array(3,4,6,1,65,-3,6,10);
  $i=0;
  $mayor=$cantidad[$i];
  while($i<=7)
  {
    if($mayor<$cantidad[$i])
    {
      $mayor=$cantidad[$i];
    }
    $i=$i+1;
  }
  echo "$mayor <br>";
  $cantidad=array(3,4,6,1,65,-3,6,10);
  $menor=$menor;
  $i=0;
  while ($i<4){
    if($menor>=$cantidad[$i]){
      $menor=$cantidad[$i];
    }
    echo "menor <br>";
  }

/********************* FUNCTION RETURN **************************/

/*

<form action="pagina.php" method="get">
<input type="text" name="datos">
<input type="submit" value="Enviar">
</form> 

*/


$resultado = $_GET['datos'];
$conulta ='<->';
$con = strpos($resultado, $consulta);

if ($con !== false){
  return $resultado;
}

function devolver (){
  if($consulta === "<->"){
    return $resultado;
  }
}



/********************* REPETICION ARRAY ************************/
  $array = array (1,5,78,54,5,5,78,2,5,5);
  print_r(array_count_values($array));
 ?>
