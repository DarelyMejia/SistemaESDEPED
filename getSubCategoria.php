<?php

//conectar a mysql---------
require 'conexion.php';
//---------------------------

if (isset($_POST['id'])) {
    $sqlS = "SELECT * FROM subcategoria where idCategorias=".$_POST['id'];
    $resultadoS = $mysqli->query($sqlS)or die("Error: no se pudo hacer la consulta.");
    $html ="";
    foreach ($resultadoS as $row){
        $html.="<option value=" . $row['idSubCategoria'] . ">" . $row['nombreSubCategoria'] . "</option>";
    echo $html;
    //echo "No hay post";
    }
    
    

}
 