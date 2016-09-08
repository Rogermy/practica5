<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />

 <?php
echo "<p align=center>UNIVERSIDAD PÚBLICA DE EL ALTO</P>";
echo "<p align=center>CARRERA: INGENIERIA DE SISTEMAS</P>";
echo "<p align=center>UNIV.: ERICK ROGER GUTIERREZ ZAPATA</P>";
echo "<p align=center>Práctica N° 5 </P>";
echo "<p align=center>Ejercicio N° 3 </P>";
 
  $filas = 9;
  $columnas = 9;
  $texto = 0;
  $grey = true;
  ?>                                                   
 </head>                                                                 
 <body>      
 

<table border="1" align="center">
 <?php
 for($t=0;$t<$filas;$t++){
          echo "<tr  align=center>";
      for($y=0;$y<$columnas;$y++){
         if($grey){
              
              echo "<td style=padding:3px;
              bgcolor=#000000;>".$texto."</td>";
              $grey=false;
              $texto++;
         }
         else{
              echo "<td style=padding:3px;>".$texto."</td>";
              $grey=true;
              $texto++;
          }
       }
       echo "</tr>";
  }
 ?>
 <center>
 <form name="form1" method="post" action="ejercicio2.php">
  <input type="submit" name="1" id="1" value="ANTERIOR">
</form>
<form name="form1" method="post" action="ejercicio4.php">
  <input type="submit" name="2" id="2" value="SIGUIENTE">
  </form>
  </body>
</html>