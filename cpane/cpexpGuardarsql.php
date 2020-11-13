<?php 
include("php/conecta.php");

$id_dato = $_POST ['id'];
$nombre = $_POST ['nombre'];
$apellido = $_POST['apellido'];
$antecedente = $_POST['antecedente'];
$colegio = $_POST['colegio'];
$aprobacion_carrera = $_POST['aprobacion_carrera'];
$nombre_carrera = $_POST['nombre_carrera'];
$comportamiento = $_POST['comportamiento'];
$estado_civil = $_POST['estado_civil'];
$trabajo = $_POST['trabajo'];
$descripcion = $_POST['descripcion'];

$query = "INSERT INTO EXPEDIENTE(id_dato, nombre, apellido, antecedente, colegio, aprobacion_carrera, nombre_carrera, comportamiento, estado_civil, trabajo, descripcion) Values ('$id_dato','$nombre','$apellido','$antecedente','$colegio','$aprobacion_carrera','$nombre_carrera','$comportamiento','$estado_civil','$trabajo','$descripcion')";

$resultado = $con -> query($query);

if($resultado){
header("location: cpexpGuardado.php"); 
//echo "Guardado correctamente";
}
else{
header("location: cpexpError.php"); 
}

?>