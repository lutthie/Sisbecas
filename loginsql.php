<?php
$user = $_POST['username'];
$pass = $_POST['pass'];

$conexion = mysqli_connect("localhost", "root", "", "mydb");
$consulta = "SELECT * FROM USUARIO_F WHERE correo_electronico='$user'and contrasena = '$pass'";
$resultado = mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
    header("location: cpane/index.php");
}
else{
    header("location: loginerror.php");
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>