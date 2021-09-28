<?php

//obtener el id de la imagen
$idExpediente = filter_input(INPUT_GET, 'id');
if ($idExpediente == '') {
  die("No tenemos el id");
}

//conectar a mysql---------
require 'conexion.php';
//---------------------------


$sql = "SELECT documentoExpediente, tipoExpe, nombreExpe FROM expediente WHERE idExpediente = $idExpediente";

//ejecutar la sentencia sql
$resultado = mysqli_query($mysqli, $sql) or die("Error: no se pudo hacer la consulta.");

while ($row = mysqli_fetch_array($resultado)) {
  $documentoExpediente = $row[0]; //obtener el archivo
  $tipoExpe = $row[1]; //obtener el tipo de archivo
  $nombreExpe = $row[2]; //obtener el nombre del archivo
}

mysqli_close($mysqli);

//header para tranformar la salida en el tipo de archivo que hemos guardado
header("Content-type: $tipoExpe");
header('Content-Disposition: inline; filename="' . $nombreExpe . '"');

header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');

//imprimir el archivo
//echo $documentoExpediente;
