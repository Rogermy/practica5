<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	
	
	<!--<link rel="stylesheet" type="text/css" href="estilos.css" />-->

</head>

<body>

<?php
echo "<p align=center>UNIVERSIDAD PÚBLICA DE EL ALTO</P>";
echo "<p align=center>CARRERA: INGENIERIA DE SISTEMAS</P>";
echo "<p align=center>UNIV.: ERICK ROGER GUTIERREZ ZAPATA</P>";
echo "<p align=center>Práctica N° 5 </P>";
echo "<p align=center>Ejercicio N° 5 </P>";

if ($gestor = opendir('fotos'))
{
 echo "<table border=1 align=center>";
 echo "<tr>";
 $i=0;

 while (false !== ($archivo = readdir($gestor))) 
 {
 		if ($archivo!="." && $archivo!="..")
 		{
 			if ($i==4)
 			{
				 $i=0;
 			  	echo "</tr>";
				 echo "<tr>";
 			}
 			$i++;
 			echo "<td>";
 			echo "<a href=fotos/$archivo><img src=fotos/$archivo width='200px'></a>";
		 	echo "</td>";
 		}
 }
 echo "</tr>";
 echo "</table>";
 closedir($gestor);
}
?>
 <center>
 <form name="form1" method="post" action="ejercicio4.php">
  <input type="submit" name="1" id="1" value="ANTERIOR">
</form>
<form name="form1" method="post" action="ejercicio6.php">
  <input type="submit" name="2" id="2" value="SIGUIENTE">
  </form>
</body>
</html>