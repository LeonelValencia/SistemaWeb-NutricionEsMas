<?php
$host = "localhost";
$user = "root";
$password="";
$db = "bdnutricion";

$conexion = new mysqli($host, $user, $password, $db);
if($conexion ->connect_errno){
    echo "Fallo la conexion a la bd" . $conexion -> connect_error;
}
?>