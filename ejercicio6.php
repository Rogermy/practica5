<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
</head>

<body>
 <center>
<?php 
echo "<p align=center>UNIVERSIDAD PÚBLICA DE EL ALTO</P>";
echo "<p align=center>CARRERA: INGENIERIA DE SISTEMAS</P>";
echo "<p align=center>UNIV.: ERICK ROGER GUTIERREZ ZAPATA</P>";
echo "<p align=center>Práctica N° 5 </P>";
echo "<p align=center>Ejercicio N° 6 </P>";
$rows = array(
array(  'nombre' => 'Roger', 'apellidos' => 'Gutierrez', 'telefono' => '76567876'),

array('nombre' => 'Bernardo', 'apellidos' => 'Patzy', 'telefono' => '54564536'),
array('nombre' => 'Maria', 'apellidos' => 'Nena', 'telefono' => '7656765')
);
foreach($rows as $valor) {
echo 'NOMBRE: ' . $valor['nombre'] . '<br />';
echo 'APELLIDOS: ' . $valor['apellidos'] . '<br />';
}
?>

<?php
$estacion[0] = "Primavera";
$estacion[1] = "Verano";
$estacion[2] = "Otoño";
$estacion[3] = "Invierno";
foreach($estacion as $valor) {  
echo 'ESTACION: '. $valor.'<br/>';  

}
?>
<br>
 <form name="form1" method="post" action="ejercicio5.php">
  <input type="submit" name="1" id="1" value="ANTERIOR">
</form>
<form name="form1" method="post" action="ejercicio7.php">
  <input type="submit" name="2" id="2" value="SIGUIENTE">
  </form>
</body>
</html>