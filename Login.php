<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "prodsoft";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["Usuario"];
$pass = $_POST["Contraseña"];

$query = mysqli_query($conn,"SELECT * FROM operador WHERE ID_Operario = '".$nombre."' and Password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	header("Location: Servicios.html");
}
else if ($nr == 0) 
{
	echo "<script> alert('Error en la Informacion Suministrada');window.location= 'loguin.html' </script>";
}
?>