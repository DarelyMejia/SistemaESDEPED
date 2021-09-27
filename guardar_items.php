<?php
//$nombreSubCategoria = $_POST['nombreSubCategoria'];
// echo " --- ".$nombreSubCategoria;
if (isset($_POST["item"])) {
    require 'conexion.php';

    $nombreSubCategoria = $_POST['nombreSubCategoria'];
    $item=$_POST['item'];
    $idRubros = $_POST['idSubCategoria'];
    $definicion = $_POST['definicion'];
    $definicionComprobante = $_POST['definicionComprobante'];

    $cadena = 'Seleccione SubCategoria';
    echo " " .$cadena;
    if ($nombreSubCategoria == $cadena) {
        $sql2 = "INSERT INTO catalogosrubros(item, idInstrumentosRubros, definicion, definicionComprobante) VALUES ('$item', '$idRubros', '$definicion', '$definicionComprobante')";
        $resultado1 = $mysqli->query($sql2);
    } else {
        
        $where = "WHERE nombreSubCategoria LIKE '%$nombreSubCategoria%' and idSubCategoria='$idRubros'";
        $sql = "SELECT idSubCategoria FROM subcategoria $where";
        echo " " . $sql;
        $result = $mysqli->query($sql);
        $conve = mysqli_fetch_assoc($result);
        $idSubCategoria = $conve["idSubCategoria"];
        echo "idSubCategoria: " .$idSubCategoria;

        $sql2 = "SELECT idInstrumentosRubros FROM subcategoria WHERE idSubCategoria='$idSubCategoria'";
        $resultado2 = $mysqli->query($sql2);
        $insidnew2 = mysqli_fetch_assoc($resultado2);
        $idInstRubros = $insidnew2["idInstrumentosRubros"];
        echo "idInstRubros: " .$idInstRubros;

        $sql2 = "INSERT INTO catalogosrubros(idSubcategoria, idInstrumentosRubros, item,definicion, definicionComprobante) VALUES ('$idSubCategoria','$idInstRubros','$item','$definicion', '$definicionComprobante')";
        $resultado1 = $mysqli->query($sql2);
    }

    
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
}
