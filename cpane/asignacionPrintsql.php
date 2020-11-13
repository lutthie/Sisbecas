<?php 
include("php/conecta.php");
require('fpdf.php');

$id_asig = $_POST ['id'];
$fecha_asignado = $_POST ['datea'];
$carnet = $_POST['carne'];
$SOLICITUD_id_soli = $_POST['nosoli'];
$BECA_id_beca = $_POST['solibec'];
$SEGURO_id_seguro = $_POST['segur'];
$FINANZA_id_fin = $_POST['fianz'];
$USUARIO_F_id_usuario = $_POST['user'];


$query = "INSERT INTO ASIGNACION(id_ASIG, fecha_asignado, carnet, SOLICITUD_id_soli, BECA_id_beca, SEGURO_id_seguro, FINANZA_id_fin, USUARIO_F_id_usuario) Values ('$id_asig','$fecha_asignado','$carnet','$SOLICITUD_id_soli','$BECA_id_beca','$SEGURO_id_seguro','$FINANZA_id_fin','$USUARIO_F_id_usuario')";

$resultado = $con -> query($query);

if($resultado){
    class PDF extends FPDF{
        function Header(){
            // Logo
            $this->Image('icon.png',10,8,33);
            // Arial bold 15
            $this->SetFont('Arial','B',15);
            // Movernos a la derecha
            $this->Cell(80);
            // Título
            $this->Cell(30,10,utf8_decode('Asignación'),1,0,'C');
            // Salto de línea
            $this->Ln(20);
        }
        // Pie de página
        function Footer(){
            // Posición: a 1,5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Número de página
            $this->Cell(0,10,'Página '.$this->PageNo().'/{nb}',0,0,'C');
        }
    }
    $doc = new PDF();
    $doc->AddPage();
    $doc->SetFont('Arial','B',12); 
    $doc->Ln();
    $doc->Cell(50,10,utf8_decode('Asignación no. ').$_POST['id'],0,2,'L',0);
    $doc->Cell(50,9,'Fecha asignado '.$_POST['datea'],0,2,'L',0);
    $doc->Cell(50,9,'Carnet '.$_POST['carne'],0,2,'L',0);
    $doc->Cell(50,9,'No. solicitud '.$_POST['nosoli'],0,2,'L',0);
    $doc->Cell(50,9,utf8_decode('Código de beca a aplicar ').$_POST['solibec'],0,2,'L',0);
    $doc->Cell(50,9,utf8_decode('Código de seguro ').$_POST['segur'],0,2,'L',0);
    $doc->Cell(50,9,utf8_decode('Código de Finanza ').$_POST['fianz'],0,2,'L',0);
    $doc->Cell(50,9,utf8_decode('Código del usuario ').$_POST['user'],0,2,'L',0);
    $doc->Output("Reporte_asignacion_SISBECASGT.pdf","F");
    
    header("location: Reporte_asignacion_SISBECASGT.pdf"); 
}
else{
header("location: asignacionError.php"); 
}

?>