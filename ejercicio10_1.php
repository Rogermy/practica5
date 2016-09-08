<center>
<?php

$usuario=admin;
$pass=123;

$u=$_POST['usr'];
$p=$_POST['pwd'];

if($usuario ==$u && $pass ==$p)
	{

	header("location:ejercicio10_2.php");
	}
	else
	{
		
	header("location:ejercicio10.php");
    }
?>
