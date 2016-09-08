
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
echo "<p align=center>Ejercicio N° 7 </P>";
 ?>
 <center>
<form method="get" action="ejercicio7_1.php">
	<table width="258" border="0">

		<tr>
			<td width="75">numero 1</td>
			<td width="151">
			 <input name="txtn1" type="text" id="txtn1" value=""/>
			</td>
		</tr>
		<tr>
			<td width="75">numero 2</td>
			<td>
			 <input name="txtn2" type="text" id="txtn2" value=""/>
			</td>
		</tr>
		<tr>
			<td>numero 3</td>
			<td>
			 <input name="txtn3" type="text" id="txtn3" value=""/>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
			 <input name="btnCalcular" type="submit" id="btnCalcular" value="Calcular"/>
			</td>
		</tr>


	</table>
    <br>
</form>
  <form name="form1" method="post" action="ejercicio6.php">
  <input type="submit" name="1" id="1" value="ANTERIOR">
</form>
<form name="form1" method="post" action="ejercicio8.php">
  <input type="submit" name="2" id="2" value="SIGUIENTE">
  </form>

 </body>                                                                 
 </html>