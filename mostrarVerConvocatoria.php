<?php

//conectar a mysql---------
require 'conexion.php';
//---------------------------

if (isset($_GET["id"])) {
    $idConvocatoria = $_GET['id'];

    //obtener el id del PDF
    $sql2 = "SELECT documentoConvocatoria,nombreDoc,tipo FROM convocatoria WHERE idConvocatoria = '$idConvocatoria'";
    //echo "/*/*/".$sql2;
    $resultado = $mysqli->query($sql2) or die("Error: no se pudo hacer la consulta.");

    while ($row = mysqli_fetch_array($resultado)) {
        $documentoConvocatoria = $row[0]; //obtener el archivo
        $tipo = $row[1]; //obtener el tipo de archivo
        $nombreDoc = $row[2]; //obtener el nombre del archivo
    }

    mysqli_close($mysqli);

    //header para tranformar la salida en el tipo de archivo que hemos guardado
    header("Content-type: $tipo");
    header('Content-Disposition: inline; filename="'. $nombreDoc .'"');

    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');

    //imprimir el archivo
    echo $documentoConvocatoria;
}
