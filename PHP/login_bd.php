<?php 
/*session_start();*/

include 'conexion.php';
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
/*$contrasena = hash('sha512',$contrasena);*/

$validar_login=mysqli_query($conn, "SELECT*FROM usuarios WHERE 
correo='$correo' and contrasena='$contrasena'");

if(mysqli_num_rows($validar_login)>0){
    $_SESSION['usuario']=$correo;
    header("location:../verPoke.html");
    exit;
}
else{
    echo'
    <script>
    alert("Usuario no existe, por favor verifique los valores ingresados");
    window.location="../loginRegiter.html";
    </script>
    ';
    exit;
}
?>