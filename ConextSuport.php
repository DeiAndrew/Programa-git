<?php 

$conexion = mysqli_connect('localhost', 'root', '','prodsoft')
or die(mysqli_error($mysqli));

insertar($conexion);

function insertar ($conexion)
{
    $Cedula = $_POST['Usuario'];
    $Contacto = $_POST['Contacto'];
    $Solicitud = $_POST['Solicitud'];
    

    $consulta = "INSERT INTO soporte(ID_Operio, Contacto, Solicitud) VALUES ('$Cedula', '$Contacto', '$Solicitud')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    header("Location: procedexito.html");
}

?>