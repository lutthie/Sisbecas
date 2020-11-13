<?php 
include("php/conecta.php");

$id_tutor = $_POST ['id'];
$nombre = $_POST ['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo_electronico = $_POST['email'];
$trabajo = $_POST['trabajo'];
$descripcion = $_POST['descrip'];
$CIUDAD_id_ciudad = $_POST['ciudad'];

$query = "INSERT INTO TUTOR(id_tutor, nombre, apellido, telefono, correo_electronico, trabajo, descripcion, CIUDAD_id_ciudad) Values ('$id_tutor','$nombre','$apellido','$telefono','$correo_electronico','$trabajo','$descripcion','$CIUDAD_id_ciudad')";

$resultado = $con -> query($query);

if($resultado){
header("location: cptutorGuardado.php"); 
//echo "Guardado correctamente";
}
else{
header("location: cptutorError.php"); 
}

?>