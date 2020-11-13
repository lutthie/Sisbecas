<?php 
include("php/conecta.php");

$id = $_POST ['id'];
$nombre = $_POST ['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$trabajo = $_POST['trabajo'];
$descripcion = $_POST['descrip'];
$ciudad = $_POST['ciudad'];

$query = "INSERT INTO TUTOR(id_tutor, nombre, apellido, telefono, correo_electronico, trabajo, descripcion, CIUDAD_id_ciudad) Values ('$id','$nombre','$apellido','$telefono','$email','$trabajo','$descripción','$ciudad')";

$resultado = $con -> query($query);

if($resultado){
echo "Guardado correctamente";
}
else{
echo "No se pudo guardar";
}

?>