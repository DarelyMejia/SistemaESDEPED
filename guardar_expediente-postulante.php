<?php
require 'conexion.php';
$nombreExpediente = $_POST["nombreExpediente"];
//echo " --- ".$nombreExpediente;
if (isset($_POST["nombreExpediente"])) {

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

    
    $sql = "INSERT INTO expediente(Usuarios_idUsuarios, nombreExpediente, documentoExpediente, nombreExpe, tipoExpe) VALUES (?, ?, ?, ?, ?)";	
	$stmt = mysqli_prepare($mysqli, $sql);
    echo " --- ".$sql;
    $Usuarios_idUsuarios=3;
	
	$stmt->bind_param('sssss', $Usuarios_idUsuarios, $nombreExpediente, $archivo_binario, $archivo_nombre, $archivo_tipo);
    $resultado = $mysqli->query($sql);
    echo " -//-- ".$resultado;
    	//ejecutamos la sentencia
  if(mysqli_stmt_execute($stmt)){
    echo "Ya guardamos el archivo en la base de datos<br/>
          &Uacute;ltimo id insertado: <a href='ver.php?id=". mysqli_stmt_insert_id($stmt)."'>". mysqli_stmt_insert_id($stmt)."</a>";
  }else{
    echo "Chanfle, hubo un problema y no se guardo el archivo. ". mysqli_stmt_error($stmt)."<br/>";
  }  
	
	mysqli_stmt_close($stmt);
	mysqli_close($mysqli);


?>

    <body>
        <div class="container">
            <div class="row">
                <div class="row" style="text-align:center">
                    <?php if ($resultado) {
                        echo '<div class="alert alert-success">convocatoria registrada con éxito</div>';
                    } else {
                        echo '<div class="alert alert-success">convocatoria registrada sin éxito</div>';
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

