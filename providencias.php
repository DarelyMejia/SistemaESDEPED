<?php

//conectar a mysql---------
require 'conexion.php';
//---------------------------

if (isset($_POST['id'])) {
    $sqlC = "SELECT idCategorias , nombreCategorias FROM categorias where idInstrumentosRubros=".$_POST['id'];
    //echo "no hay nada".$sqlC;
    $resultadoC = $mysqli->query($sqlC)or die("Error: no se pudo hacer la consulta.");
   // echo "no hay nada".$resultadoC;
    $html ="";
    foreach ($resultadoC as $row ){
        $html.="<option value=" . $row['idCategorias'] . ">" . $row['nombreCategorias'] . "</option>";
    echo $html;
    //echo "No hay post";
    }
    
    /**$idConvocatoria = $_GET['id'];
    //obtener el id del PDF
    $sql2 = "SELECT documentoConvocatoria,nombreDoc,tipo FROM convocatoria WHERE idConvocatoria = '$idConvocatoria'";
    //echo "".$sql2;
    $resultado = $mysqli->query($sql2) or die("Error: no se pudo hacer la consulta.");*/


}
