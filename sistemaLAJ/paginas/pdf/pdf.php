<?php
include('../../config.php');
require 'vendor/autoload.php';

$id = $_SESSION['imprimirid'];

$sql3 = MySql::conectar()->prepare("SELECT * FROM `dados` WHERE id = ".$id." ");
$sql3->execute();
$dados = $sql3->fetchAll();

include('imprimir.php');

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf(['enable_remote' => true]);
$dompdf->loadHtml($arquivo);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser

$dompdf->stream('Dados-de-'.$solicitante.'.pdf');

?>