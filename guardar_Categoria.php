<?php
//$nombreCategorias = $_POST['nombreCategorias'];
// echo " --- ".$nombreCategorias;
if (isset($_POST["nombreCategorias"])) {
    require 'conexion.php';

    $nombreInstrumentosRubros = $_POST['nombreInstrumentosRubros'];
    $idInstrumentosRubros = $_POST['idInstrumentosRubros'];
    $puntosCategorias = $_POST['puntosCategorias'];
    $nombreCategorias = $_POST['nombreCategorias'];

    $where = "WHERE nombreInstrumentosRubros LIKE '$nombreInstrumentosRubros' and idInstrumentosRubros='$idInstrumentosRubros' ";
    $sql = "SELECT idInstrumentosRubros FROM instrumentosrubros $where";
    echo " " . $sql;
    $resultado = $mysqli->query($sql);
    $insidnew = mysqli_fetch_assoc($resultado);
    $idInstrumentosRubros = $insidnew["idInstrumentosRubros"];



    $sql2 = "INSERT INTO categorias(idInstrumentosRubros, nombreCategorias,puntosCategorias) VALUES ('$idInstrumentosRubros','$nombreCategorias','$puntosCategorias')";
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
}?>
<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=instrumentoCategoriass.php">
