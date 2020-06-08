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
        echo "$original[$a]";
        $NewMess[]=$a;
      }
      }
      if(preg_match('(\?|¿|,|\.|>|:| )', $arrayM[$i])){
        $NewMess[]=$arrayM[$i];
        echo "$arrayM[$i]";
    }
  }


  echo "<br>";
  for ($i=0; $i < array_push($NewMess); $i++) {
    $posicion=$NewMess[$i];
    if (preg_match('(\?|¿|,|\.| )', $posicion)) {
      echo "$posicion ";
    }
    else {
      //echo "<br>$posicion";
      echo "$cesar[$posicion]";
    }
  }
  echo "<br>Tú numero de la suerte es (como dato curioso no es nada importante):$numero";
  echo "<br><a href='../../templates/Cesar.html'>Escribir nuevo mensaje</a>";
  // code...
/*
  for ($i=0; $i < strlen($mensaje); $i++) {
    echo "$i";
    for ($a=0; $a < array_push($original); $a++) {
      if ($original[$a]==) {
        // code...
      }
    }
  }*/
?>
