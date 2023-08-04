<?php
include ("conexion.php");

if (isset($_POST['guardar'])){
    $nombre_completo= $_POST['nombre'];
    $correo=$_POST['correo'];
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];

    $query = "INSERT INTO usuarios (nombre,correo,usuario,contrasena) 
    VALUES ('$nombre_completo','$correo','$usuario','$contrasena')";
    $result = mysqli_query ($conn, $query);
    if (!$result) {
        die("Query failed");
    }

$_SESSION['message'] = 'Usuario guardado satisfactoriamente';
$_SESSION['message_type'] = 'success';

header("Location:loginRegister.php");
}