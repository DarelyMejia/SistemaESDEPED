<?php
require 'conexion.php';
$periodo = $_POST["periodo"];
$periodo1 = $_POST["periodo"];
$fechaInicio = $_POST['fechaInicio'];
$fechaFin = $_POST['fechaFin'];
$nombre_Instrumento = $_POST['nombre_Instrumento'];


if (isset($_POST["periodo"])) {

    /*propiedades del archivo*/
    $archivo_nombre = $_FILES['documentoConvocatoria']['name'];
    $archivo_tipo = $_FILES['documentoConvocatoria']['type'];
    $archivo_temp = $_FILES['documentoConvocatoria']['tmp_name'];

    //verificamos si no hay error en la conexion
    if (!$mysqli) {
        $error = mysqli_error($mysqli);
        die("ERROR: " . $error["message"]);
    }

    //convertir la imagen en código binario
    $archivo_binario = (file_get_contents($archivo_temp));

    $sql1 = "INSERT INTO instrumento(nombre_Instrumento) VALUES ('$nombre_Instrumento')";
    $resultado = $mysqli->query($sql1);

    $where = "WHERE nombre_Instrumento LIKE '$nombre_Instrumento'";
    $sql2 = "SELECT idInstrumento FROM instrumento $where";
    $resultado2 = $mysqli->query($sql2);

    $nroviajenew = mysqli_fetch_assoc($resultado2);
    $idInstrumento = $nroviajenew["idInstrumento"];
    $sql = "INSERT INTO convocatoria(periodo,idUsuario, fechaInicio, fechaFin, idInstrumento, documentoConvocatoria, nombreDoc, tipo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($mysqli, $sql);

    $idusuario = 3;

    $stmt->bind_param('ssssssss', $periodo, $idusuario, $fechaInicio, $fechaFin, $idInstrumento, $archivo_binario, $archivo_nombre, $archivo_tipo);
    $resultado = $mysqli->query($sql);

    $where = "WHERE periodo LIKE '$periodo'";
    $sql3 = "SELECT idConvocatoria FROM convocatoria $where";
    $resultado3 = $mysqli->query($sql3);




    //ejecutamos la sentencia
    if (mysqli_stmt_execute($stmt)) {
        echo "Ya guardamos el archivo en la base de datos<br/>
          &Uacute;ltimo id insertado: <a href='ver.php?id=" . mysqli_stmt_insert_id($stmt) . "'>" . mysqli_stmt_insert_id($stmt) . "</a>";
    } else {
        echo "Chanfle, hubo un problema y no se guardo el archivo. " . mysqli_stmt_error($stmt) . "<br/>";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($mysqli);

?>

    <body>
        <div class="container">
            <div class="row">
                <div class="row" style="text-align:center">
                    <?php if ($resultado3) {
                        echo '<div class="alert alert-success">convocatoria registrada con éxito</div>';
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
