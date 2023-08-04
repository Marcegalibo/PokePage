<?php
include ("conexion.php");
$conn=connection();

$id=null;
$nombre_completo = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
  /*encriptamiento de contraseña*/
$contrasena = hash('sha512',$contrasena);

$sql = "INSERT INTO usuarios VALUES('$id','$nombre_completo','$correo','$usuario','$contrasena')";
$query= mysqli_query($conn,$sql); 
if($query){
  header("Location:loginRegister.html");
};
$ejecutar=mysqli_query($con,$query);
  if ($ejecutar) {
    echo'
      <script>
        alert("Usuario almacenado exitosamente");
        window.location ="loginRegister.php";
      </script>
    ';
  }
  else{ 
    echo'
    <script>
        alert("Usuario no almacenado, intentalo de nuevo");
        window.location ="loginRegister.php";
    </script>
    ';
  }
mysqli_close($con);
?>       