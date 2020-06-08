<?php
  $mensaje=(isset($_POST['mensaje']) && $_POST['mensaje'] !="") ? $_POST['mensaje']:"No ingresaste nada";
  $mensaje = strtoupper($mensaje);
  $numero=1;
  $numero=rand(1,25);
  $original=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
  $cesar=array();
  $arrayM=str_split($mensaje,1);
  for ($i=$numero; $i < array_push($original); $i++) {
    $cesar[]=$original[$i];
  }
  for ($i=0; $i < $numero; $i++) {
    $cesar[]=$original[$i];
  }

  for ($i=0; $i < strlen($mensaje); $i++) {
    for ($a=0; $a < array_push($original); $a++) {
      if ($arrayM[$i]==$original[$a]) {
        $NewMess[]=$a;
      }
      }
  }
  $a="";
  for ($i=0; $i < array_push($NewMess); $i++) {
    $posicion=$NewMess[$i];
    $a=$a.$cesar[$posicion];
  }
  $encode=base64_encode($a);
  echo "<h1>Mensaje Cifrado</h1><br>$encode<h3>¿Qué sera?</h3>";
  echo "<br>";
  $decode= base64_decode($encode);

?>
