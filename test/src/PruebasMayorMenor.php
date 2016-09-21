<?php
  /**
  * Array mayor y menor
  *
  * Creamos un array y mediante while y if determinamos que número és menor y cuál es mayor
  *
  * @param int[] $cantidad Array de números a comprobar
  * @param int $i número 0 para iniciar a recorrer el array
  *
  * @author Albert Batlle Valero <albert.batlle@gmail.com>
  */

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


 ?>
