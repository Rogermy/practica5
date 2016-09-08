<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	
	
	<!--<link rel="stylesheet" type="text/css" href="estilos.css" />-->

</head>
<center>
<body>
<p align=center>UNIVERSIDAD PÚBLICA DE EL ALTO</P>
<p align=center>CARRERA: INGENIERIA DE SISTEMAS</P>
<p align=center>UNIV.: ERICK ROGER GUTIERREZ ZAPATA</P>
<p align=center>Práctica N° 5 </P>
<p align=center>Ejercicio N° 9 </P>
<form action="ejercicio9_1.php" method="post" name="form">
<table align="center" width="400">
<tr>
	<td>	<h3>CONTACTO</h3>	</td>
</tr>

<tr>
	<td>Nombre		</td>
	<td><input type="text" name="nom" /></td>
</tr>

<tr>
	<td>Apellido:</td>
	<td><input type="text" name="ap" />	</td>
</tr>

<tr>
		<td>E-Mail		</td>
	<td> <input type="text" name="correo" />	</td>
</tr>
<tr>
		<td>Comentario		</td>
	<td> <textarea name="com">	</textarea></td>
</tr>
<tr>
	<td><input type="submit" value="enviar" title="Ingresar Empleado"/>	</td>
</tr>

</table>
</form>
<br>

  <form name="form1" method="post" action="ejercicio8.php">
  <input type="submit" name="1" id="1" value="ANTERIOR">
</form>
<form name="form1" method="post" action="ejercicio10.php">
  <input type="submit" name="2" id="2" value="SIGUIENTE">
  </form>

</body>
</html>