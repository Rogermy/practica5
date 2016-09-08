<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
</head>

<body>
<form method="post" action="ejercicio12.php">
<center>
<?php
echo "<p align=center>UNIVERSIDAD PÚBLICA DE EL ALTO</P>";
echo "<p align=center>CARRERA: INGENIERIA DE SISTEMAS</P>";
echo "<p align=center>UNIV.: ERICK ROGER GUTIERREZ ZAPATA</P>";
echo "<p align=center>Práctica N° 5 </P>";
echo "<p align=center>Ejercicio N° 12 </P>";

$total = "6"; 
$extension = ".jpg";
$carpeta = "dado";
$start = "1";
$random = mt_rand($start, $total);
$image_name = $random . $extension;
echo "<img src='$carpeta/$image_name'>";
?>
<center>
<?php
$random = mt_rand($start, $total);
$image_name = $random . $extension;
echo "<img src='$carpeta/$image_name'>";

?>
<input type="submit" value="LANZAR">

</form> 
<br><br><br>
<form name="form1" method="post" action="ejercicio11.php">
  <input type="submit" name="1" id="1" value="ANTERIOR">
</form>

</body>
</html>