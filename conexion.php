<?php 

$conexion = mysqli_connect('localhost', 'root', '','prodsoft')
or die(mysqli_error($mysqli));

insertar($conexion);

function insertar ($conexion)
{
    $Cedula = $_POST['Cedula'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Password = $_POST['Password'];
    $Area = $_POST['Area'];

    $consulta = "INSERT INTO operador(ID_Operario, Nombre_Operario, Apellido_Operario, Password, Perfil) VALUES ('$Cedula', '$Nombre', '$Apellido', '$Password', '$Area')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    header("Location: procedexito.html");
}

?>