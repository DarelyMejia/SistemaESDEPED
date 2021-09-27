<?php

if (isset($_POST["id"])) {
    require 'conexion.php';
    $idExpediente = $_POST['id'];
    $nombreExpediente = $_POST["nombreExpediente"];


    /*propiedades del archivo*/
    $archivo_nombre = $_FILES['documentoExpediente']['name'];
    $archivo_tipo = $_FILES['documentoExpediente']['type'];
    $archivo_temp = $_FILES['documentoExpediente']['tmp_name'];

    //verificamos si no hay error en la conexion
    if (!$mysqli) {
        $error = mysqli_error($mysqli);
        die("ERROR: " . $error["message"]);
    }

    //convertir la imagen en código binario
    $archivo_binario = (file_get_contents($archivo_temp));



    //$sql2 = "UPDATE usuarios SET Usuarios_idUsuarios='3', nombreExpediente='$nombreExpediente', documentoExpediente='$documentoExpediente',nombreExpe='$nombreExpe',tipoExpe='$tipoExpe' WHERE idExpediente = '$idExpediente'";
    //$resultado = $mysqli->query($sql2);

    $sql = "UPDATE expediente set nombreExpediente= ?, documentoExpediente=?, nombreExpe=?, tipoExpe=?
     where idExpediente = ?";
    $stmt = mysqli_prepare($mysqli, $sql);
   

    $stmt->bind_param('ssssi', $nombreExpediente, $archivo_binario, $archivo_nombre, $archivo_tipo, $idExpediente);
    $resultado = $mysqli->query($sql);
    

    if (mysqli_stmt_execute($stmt)) {
        echo "Ya guardamos el archivo en la base de datos<br/>
              &Uacute;ltimo id insertado: <a href='ver.php?id=" . mysqli_stmt_insert_id($stmt) . "'>" . mysqli_stmt_insert_id($stmt) . "</a>";
    } else {
        echo "Chanfle, hubo un problema y no se guardo el archivo. " . mysqli_stmt_error($stmt) . "<br/>";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($mysqli);
}
?>
<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=expediente-postulante.php">