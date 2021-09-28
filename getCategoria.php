<?php

//conectar a mysql---------
require 'conexion.php';
//---------------------------

if (isset($_POST["idInstrumentosRubros"]) && !empty($_POST["idInstrumentosRubros"])) {
    //Get all categoria data

    $query = $mysqli->query("SELECT * FROM categorias WHERE idInstrumentosRubros = ".$_POST['idInstrumentosRubros']." ORDER BY nombreCategorias ASC");
    //echo "/*" . $query;
    //Count total number of rows
    $result = $query->num_rows;
    //$result = $mysqli->query($query);


    //Display categoria list
    if ($result > 0) {
        echo '<option value="">Select categoria</option>';
        while ($row = $query->fetch_assoc()) {
            echo '<option value="' . $row['idCategorias'] . '">' . $row['nombreCategorias'] . '</option>';
        }
    } else {
        echo '<option value="">categoria no disponible </option>';
    }
}

if (isset($_POST["idCategorias"]) && !empty($_POST["idCategorias"])) {
    //Get all subcategoria data
    $query = $mysqli->query("SELECT * FROM subcategoria WHERE idCategoria = " . $_POST['idCategorias'] . " ORDER BY nombreSubCategoria ASC");
   // echo "/* SELECT * FROM subcategoria WHERE idCategorias = " . $_POST['idCategorias'] . " ORDER BY nombreSubCategoria ASC" . $query;
    //Count total number of rows
    $result = $query->num_rows;

    //Display subcategoria list
    if ($result > 0) {
        echo '<option value="">Select subcategoria</option>';
        while ($row = $query->fetch_assoc()) {
            echo '<option value="' . $row['idSubCategoria'] . '">' . $row['nombreSubCategoria'] . '</option>';
        }
    } else {
        echo '<option value="">subcategoria not available</option>';
    }
}





















/*if (isset($_POST['id'])) {
    $sqlC = "SELECT * FROM categorias where idInstrumentosRubros=".$_POST['id'];
    $resultadoC = $mysqli->query($sqlC)or die("Error: no se pudo hacer la consulta.");
    $html ="";
    foreach ($resultadoC as $row ){
        $html.="<option value=" . $row['idCategorias'] . ">" . $row['nombreCategorias'] . "</option>";
    echo $html;
    //echo "No hay post";
    }
    
    


}*/
