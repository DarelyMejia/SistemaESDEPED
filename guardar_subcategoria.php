<?php
//$nombreSubCategoria = $_POST['nombreSubCategoria'];
// echo " --- ".$nombreSubCategoria;
if (isset($_POST["nombreSubCategoria"])) {
    require 'conexion.php';

    $nombreCategorias = $_POST['nombreCategorias'];
    $idRubros = $_POST['idCategorias'];
    $puntosSubCategoria = $_POST['puntosSubCategoria'];
    $nombreSubCategoria = $_POST['nombreSubCategoria'];

    $cadena = 'Seleccione categoria';
    echo " " .$cadena;
    if ($nombreCategorias == $cadena) {
        $sql2 = "INSERT INTO subcategoria(nombreSubCategoria, idInstrumentosRubros, puntosSubCategoria) VALUES ('$nombreSubCategoria', '$idRubros', '$puntosSubCategoria')";
    } else {
        $where = "WHERE nombreCategorias LIKE '%$nombreCategorias%' AND idCategorias='$idRubros'";
        $sql = "SELECT idCategorias FROM categorias $where";
        echo " " . $sql;
        $resultado = $mysqli->query($sql);
        $insidnew = mysqli_fetch_assoc($resultado);
        $idCategorias = $insidnew["idCategorias"];
        echo "idcategoria: " . $idCategorias;

        $sql2 = "SELECT idInstrumentosRubros FROM categorias WHERE idCategorias='$idCategorias'";
        $resultado2 = $mysqli->query($sql2);
        $insidnew2 = mysqli_fetch_assoc($resultado2);
        $idInstRubros = $insidnew2["idInstrumentosRubros"];
        echo "idInstRubros: " . $idInstRubros;

        $sql2 = "INSERT INTO subcategoria(idCategoria, idInstrumentosRubros, nombreSubCategoria,puntosSubCategoria) VALUES ('$idCategorias','$idInstRubros','$nombreSubCategoria','$puntosSubCategoria')";
    }

    $resultado1 = $mysqli->query($sql2);
    echo "<br/>".$sql2;
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
}?>
<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=instrumento-subcategoria.php">
