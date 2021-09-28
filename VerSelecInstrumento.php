<?php
$k = $_POST['id'];
//echo "/*/*" . $k;
$k = trim($k);
//echo "/ ??*/*".$k;  
require 'conexion.php';
$sql = "SELECT * FROM catalogosrubros where idInstrumentosRubros = '{$k}'";
echo "/*/*" . $sql;
$result = $mysqli->query($sql);
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

?>
    <tr>

        <td><?php echo $row['item']; ?></td>
        <td><?php echo $row['definicion']; ?></td>
        <td><?php echo $row['definicionComprobante']; ?></td>
        <td>colocar un while de la tabla puntoscalogos</td>
        <td><input type="text" class="form-control" placeholder="Ingresa Unidad de medida" aria-label="Input group example" aria-describedby="basic-addon1">
        </td>
        <td>colocar valor automatico de puntoscalogos y puntos de unidad</td>
        <td><input type="file" class="form-control" name="archivo" id="fileField" accept="application/pdf" required>
            <p>
                <button type="file" value="Upload" class="btn btn-secondary" name="archivo" id="fileField" accept="application/pdf">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-up" viewBox="0 0 16 16">
                        <path d="M8.5 11.5a.5.5 0 0 1-1 0V7.707L6.354 8.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 7.707V11.5z" />
                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                    </svg>
                </button>
            </p>
        </td>
        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark" viewBox="0 0 16 16">
                <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
            </svg> colocar otroo while de la tabla puntajerubro </td>
        <td>Estatus del proceso que lleva en la evaluacion </td>
    </tr>
    


<?php
}

echo "Sin Datos";

?>