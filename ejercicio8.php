<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
<center>
<?php
echo "<p align=center>UNIVERSIDAD PÚBLICA DE EL ALTO</P>";
echo "<p align=center>CARRERA: INGENIERIA DE SISTEMAS</P>";
echo "<p align=center>UNIV.: ERICK ROGER GUTIERREZ ZAPATA</P>";
echo "<p align=center>Práctica N° 5 </P>";
echo "<p align=center>Ejercicio N° 8 </P>";
$dia=$_POST["dia"];
$mes=$_POST["mes"];
$anio=$_POST["anio"];

if ($mes=="01"){
		echo "$dia de enero $anio";
}
if ($mes=="02"){
		echo "$dia de febrero $anio";
}
if ($mes=="03"){
		echo "$dia de marzo $anio";
}
if ($mes=="04"){
		echo "$dia de abril $anio";
}
if ($mes=="05"){
		echo "$dia de mayo $anio";
}
if ($mes=="06"){
		echo "$dia de junio $anio";
}
if ($mes=="07"){
		echo "$dia de julio $anio";
}
if ($mes=="08"){
		echo "$dia de agosto $anio";
}
if ($mes=="09"){
		echo "$dia de septiembre $anio";
}
if ($mes=="10"){
		echo "$dia de octubre $anio";
}
if ($mes=="11"){
		echo "$dia de noviembre $anio";
}
if ($mes=="12"){
		echo "$dia de diciembre $anio";
}
"<BR>"
?>
<html>
<body>
<form method="POST" action="ejercicio8.php">		
		dia:
	 <input name="dia" type="text" id="dia" value=""/><br>
			mes:
	<input name="mes" type="text" id="mes" value=""/><br>
		anio
	 <input name="anio" type="text" id="anio" value=""/><br>

<input name="btnfecha" type="submit" id="btnfecha" value="ir  a fecha"/>
		
</form>
<br>
</form>
  <form name="form1" method="post" action="ejercicio7.php">
  <input type="submit" name="1" id="1" value="ANTERIOR">
</form>
<form name="form1" method="post" action="ejercicio9.php">
  <input type="submit" name="2" id="2" value="SIGUIENTE">
  </form>
</body>
</html>

