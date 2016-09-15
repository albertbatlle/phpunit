<?php
function extraerNumerosArray($ar){
  $result=[];

  foreach ($ar as $v) {
    if(is_int($v)) $result[] = $v;
    else if(is_float($v)) $result[] = $v;
  }

  return $result;
}

function cuentaNumerosPares($ar){
  $pares=0;
  for($i=0; $i<count($ar); $i++){
    if($ar[$i]%2===0) $pares++;
  }
  return $pares;
}

?>
