<?php
$mysqli = new mysqli('localhost','root', '','mydb');
if ($mysqli->connect_error) {
    die('error en la conexion' . $mysqli->connect_error);
}
//printf("Serv. Info: %s", $mysqli->server_info);
?>