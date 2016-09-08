<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	
	<meta name="description" content="Mi sitio web" />
	
	<link rel="stylesheet" type="text/css" href="estilos.css" />





</head>

<body>
    

<?php
echo "<p align=center>UNIVERSIDAD PÚBLICA DE EL ALTO</P>";
echo "<p align=center>CARRERA: INGENIERIA DE SISTEMAS</P>";
echo "<p align=center>UNIV.: ERICK ROGER GUTIERREZ ZAPATA</P>";
echo "<p align=center>Práctica N° 5 </P>";
echo "<p align=center>Ejercicio N° 1 </P>";
echo "<table border=1 align=center>";
$n=1;
for ($n1=1; $n1<=10; $n1++)
{
 echo "<tr>";
 for ($n2=1; $n2<=10; $n2++)
 {
 echo "<td>", $n, "</td>";
 $n=$n+1;
 }
 echo "</tr>";
}
echo "</table>";
?>
<br>

<center>
<form name="form1" method="post" action="ejercicio2.php">
  <input type="submit" name="1" id="1" value="SIGUIENTE">
</form>
</body>
</html>