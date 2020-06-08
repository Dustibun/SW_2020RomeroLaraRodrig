<?php
$nombre=(isset($_POST['nombre']) && $_POST['nombre'] !="") ? $_POST['nombre']:"0";
$apPat=(isset($_POST['apPat']) && $_POST['apPat'] !="") ? $_POST['apPat']:"0";
$apMat=(isset($_POST['apMat']) && $_POST['apMat'] !="") ? $_POST['apMat']:"0";
$Fecha=(isset($_POST['Fecha']) && $_POST['Fecha'] !="") ? $_POST['Fecha']:"0";
$Colegio=(isset($_POST['Colegio']) && $_POST['Colegio'] !="") ? $_POST['Colegio']:"0";
$Usuario=(isset($_POST['RFC']) && $_POST['RFC'] !="") ? $_POST['RFC']:"0";
$Contraseña=(isset($_POST['Contraseña']) && $_POST['Contraseña'] !="") ? $_POST['Contraseña']:"0";
if ($nombre==="0" || $apPat=="0" || $apMat=="0" || $Fecha=="0" || $Colegio=="0"  || $Usuario=="0" || $Contraseña=="0") {
  echo "El/los datos no fueron ingresados:<br>";echo "$Fecha";
  $nombre=($nombre==0)?"":"No ingresaste Nombre<br>";
  $apPat=($apPat==0)?"":"No ingresaste Apellido Paterno<br>";
  $apMat=($apMat==0)?"":"No ingresaste Apellido Materno<br>";
  $Fecha=($Fecha==0)?"":"No ingresaste Fecha<br>"; echo "$Fecha";
  $Colegio=($Colegio==0)?"":"No ingresaste Colegio<br>";
  $Usuario=($Usuario==0)?"":"No ingresaste Usuario<br>";
  $contraseña=($Contraseña==0)?"":"No ingresaste una Contraseña<br>";
  echo "$nombre$apPat$apMat$Fecha$Colegio$Usuario$contraseña";
}
else {
  if (preg_match('/^([A-ZÑ]{4})([0-9]{2})[0-1][0-9][0-3][0-9]([A-Z\d]{3})$/',$Usuario)) {
    $letNom=substr($nombre,0,1);
    $letApP=substr($apPat,0,2);
    $letApP=strtoupper($letApP);
    $letApM=substr($apMat,0,1);
    $anio=substr($Fecha,2,2);
    $mes=substr($Fecha,5,2);
    $dia=substr($Fecha,8,2);
    if (preg_match('/^(['.$letApP.']{2})(['.$letApM.'])(['.$letNom.'])(['.$anio.']{2})(['.$mes.']{2})(['.$dia.']{2})([A-Z\d]{3})$/',$Usuario)) {
      echo "Usuario registrado";
    }
  }
}
echo "<br><a href='../../templates/Practica_7.html'>Regresar al Registro</a>";
?>
