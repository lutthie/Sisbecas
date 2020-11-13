<?php 
include("php/conecta.php");

$id_soli = $_POST ['id_soli'];
$nombre = $_POST ['name'];
$fecha_emitida = $_POST['datee'];
$nombre_tutor = $_POST['tutor'];
$establecimiento = $_POST['stabli'];
$numero_telefono = $_POST['phone'];
$correo_electronico = $_POST['mail'];
$referente = $_POST['referent'];
$numero_referente = $_POST['phoner'];
$direccion = $_POST['direc'];
$descripcion = $_POST['descrip'];
$BECARIO_id_bec = $_POST['id_us'];
$BECA_id_beca =$_POST['becaf'];

$query = "INSERT INTO SOLICITUD(id_soli, nombre, fecha_emitida, nombre_tutor, establecimiento, numero_telefono, correo_electronico, referente, numero_referente, direccion, descripcion, BECARIO_id_bec, BECA_id_beca) Values ('$id_soli','$nombre','$fecha_emitida','$nombre_tutor','$establecimiento','$numero_telefono','$correo_electronico','$referente','$numero_referente','$direccion','$descripcion','$BECARIO_id_bec','$BECA_id_beca')";

$resultado = $con -> query($query);

if($resultado){
header("location: solicitudGuardado.php"); 
    
//echo "Guardado correctamente";
}
else{
    header("location: solicitudError.php"); 
}

?>