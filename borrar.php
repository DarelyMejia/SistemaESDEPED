<?php
require 'conexion.php';
$idExpediente = $_GET['id'];
//echo "/*/*".$idExpediente;
if(isset($_GET["id"])){
	$idExpediente = $_GET['id'];
	
	$sql = "DELETE FROM expediente WHERE idExpediente = '$idExpediente'";
	$resultado = $mysqli->query($sql);
    
} ?>
<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=expediente-postulante.php">