<?php
require 'conexion.php';
//$nombreInstrumentosRubros = $_POST['nombreInstrumentosRubros'];
// echo " --- ".$nombreInstrumentosRubros;
if  (isset($_POST["nombreInstrumentosRubros"])) {
    

    $nombreInstrumentos = $_POST['nombreInstrumentos'];
    $puntosTotalesInstrumentosRubros = $_POST['puntosTotalesInstrumentosRubros'];
    $nombreInstrumentosRubros = $_POST['nombreInstrumentosRubros'];
    
    $where = "WHERE nombre_Instrumento LIKE '%$nombreInstrumentos%'";
    $sql = "SELECT idInstrumento FROM instrumento $where";
    echo " ".$sql;
    $resultado = $mysqli->query($sql);
    $insidnew = mysqli_fetch_assoc($resultado);
    $idInstrumento = $insidnew["idInstrumento"];

    echo " --- ".$idInstrumento;

    $sql2 = "INSERT INTO instrumentosrubros(Instrumento_idInstrumento, nombreInstrumentosRubros,puntosTotalesInstrumentosRubros) VALUES ('$idInstrumento','$nombreInstrumentosRubros','$puntosTotalesInstrumentosRubros')";
    $resultado1 = $mysqli->query($sql2);
    echo " ".$sql2;
    


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
<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=instrumentoseguimiento.php">
