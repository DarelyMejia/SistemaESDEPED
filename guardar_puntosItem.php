<?php
//$nombreCategorias = $_POST['nombreCategorias'];
// echo " --- ".$nombreCategorias;
if (isset($_POST["puntos"])) {
    require 'conexion.php';

    $nombreItem = $_POST['nombreItem'];
    $idRubros = $_POST['idSubCategoria'];
    $clasificacion = $_POST['clasificacion'];
    $puntos = $_POST['puntos'];
    $unidad = $_POST['unidad'];

    $where = "WHERE item LIKE '%$nombreItem%' and  idSubCategoria='$idRubros' ";
    $sql = "SELECT idCatalogosRubros FROM catalogosrubros $where";
    echo " " . $sql;
    $resultado = $mysqli->query($sql);
    $insidnew = mysqli_fetch_assoc($resultado);
    $idCatalogosRubros = $insidnew["idCatalogosRubros"];



    $sql2 = "INSERT INTO puntoscatalogos(clasificacion, puntos,puntosCategorias, CatalogosRubros_idCatalogosRubros) VALUES ('$clasificacion','$puntos','$unidad','$idCatalogosRubros')";
    $resultado1 = $mysqli->query($sql2);
    echo " " . $sql2;



?>

    <body>
        <div class="container">
            <div class="row">
                <div class="row" style="text-align:center">
                    <?php if ($resultado1) {
                        echo '<div class="alert alert-success">Datos guardados con éxito</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php } else {
    echo '<div class="alert alert-denger">Valida tus datos</div>';
}
