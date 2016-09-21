<?php
/**
* Function Return si encontramos <->
*
* Mediante un if determinamos si aparece <-> en los datos introducidos por el usuario, y en caso afirmativo se produce un return
*
* @param int $resultado es la variable con la que obtenemos a traves de un get los datos introducidos por el usuario
*
* @param int $consulta elemento <->
*
* @param int $con comprobar si $consulta aparece en $resultado
*
* @return int $resultado
*
* @author Albert Batlle Valero <albert.batlle@gmail.com>
*/


/*

<form action="pagina.php" method="get">
<input type="text" name="datos">
<input type="submit" value="Enviar">
</form>

*/


$resultado = $_GET['datos'];
$consulta ='<->';
$con = strpos($resultado, $consulta);

if ($con !== false){
  return $resultado;
}

function devolver (){
  if($consulta === "<->"){
    return $resultado;
  }
}



?>
