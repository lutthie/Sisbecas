<?php 
include("conecta.php");

$id_user = $_POST ['id_user'];
$nombre = $_POST ['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$correo_electronico = $_POST['email'];
$contrasena = $_POST['contrasena'];
$cpassword = $_POST['cpassword'];

if($contrasena != $cpassword){
    header("location: suscripcionp.php");
}
else{
    
    $query = "INSERT INTO USUARIO_F(id_usuario, nombre, apellido, edad, correo_electronico, contrasena) Values ('$id_user','$nombre','$apellido','$edad','$correo_electronico','$contrasena')";
    
    $resultado = $con -> query($query);
    
    if($resultado){
        header("location: login.php"); 
        //echo "Guardado correctamente";
    }
    else{
        header("location: suscripcionError.php"); 
    }
}

?>