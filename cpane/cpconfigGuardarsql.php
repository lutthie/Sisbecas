<?php 
include("php/conecta.php");

$id_bec = $_POST ['id'];
$nombre = $_POST ['firstname'];
$apellido = $_POST['lastname'];
$correo_electronico = $_POST['email'];
$telefono = $_POST['phone'];
$TUTOR_id_tutor = $_POST['tutor'];
$EXPEDIENTE_id_dato = $_POST['expediente'];
$CIUDAD_id_ciudad = $_POST['ciudad'];


$query = "INSERT INTO BECARIO(id_bec, nombre, apellido, correo_electronico, telefono, TUTOR_id_tutor, EXPEDIENTE_id_dato, CIUDAD_id_ciudad) Values ('$id_bec','$nombre','$apellido','$correo_electronico','$telefono','$TUTOR_id_tutor','$EXPEDIENTE_id_dato','$CIUDAD_id_ciudad')";

$resultado = $con -> query($query);

if($resultado){
header("location: cpconfigGuardado.php"); 
//echo "Guardado correctamente";
}
else{
header("location: cpconfigError.php"); 
}

?>