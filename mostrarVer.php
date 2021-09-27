<?php

//conectar a mysql---------
require 'conexion.php';
//---------------------------

if (isset($_GET["id"])) {
    $idExpediente = $_GET['id'];

    //obtener el id del PDF
    $sql2 = "SELECT documentoExpediente,nombreExpe,tipoExpe FROM expediente WHERE idExpediente = '$idExpediente'";
    //echo "/*/*/".$sql2;
    $resultado = $mysqli->query($sql2) or die("Error: no se pudo hacer la consulta.");

    while ($row = mysqli_fetch_array($resultado)) {
        $documentoExpediente = $row[0]; //obtener el archivo
        $tipoExpe = $row[1]; //obtener el tipo de archivo
        $nombreExpe = $row[2]; //obtener el nombre del archivo
    }

    mysqli_close($mysqli);

    //header para tranformar la salida en el tipo de archivo que hemos guardado
    header("Content-type: $tipoExpe");
    header('Content-Disposition: inline; filename="'. $nombreExpe .'"');

    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');

    //imprimir el archivo
    echo $documentoExpediente;
}
