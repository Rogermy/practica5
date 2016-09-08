<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />

</head>

<body>
<?php
echo "<p align=center>UNIVERSIDAD PÚBLICA DE EL ALTO</P>";
echo "<p align=center>CARRERA: INGENIERIA DE SISTEMAS</P>";
echo "<p align=center>UNIV.: ERICK ROGER GUTIERREZ ZAPATA</P>";
echo "<p align=center>Práctica N° 5 </P>";
echo "<p align=center>Ejercicio N° 2 </P>";
	define("TAM",10); 
	echo "<table border=1 align=center>";
	$n=1;
for ($n1=1; $n1<=TAM; $n1++)
{
	 if ($n1 % 2 == 0)
	 echo "<tr bgcolor=yellow>";
	 else
	 echo "<tr>";
		 for ($n2=1; $n2<=TAM; $n2++)
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
<form name="form1" method="post" action="ejercicio1.php">
  <input type="submit" name="1" id="1" value="ANTERIOR">
</form>
<form name="form1" method="post" action="ejercicio3.php">
  <input type="submit" name="2" id="2" value="SIGUIENTE">
  </form>
</body>
</html>