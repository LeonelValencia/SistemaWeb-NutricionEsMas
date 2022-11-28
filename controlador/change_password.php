<?php
require_once('config.php');
$id = $_POST['username'];
$pass = $_POST['new_password'];

$query = "UPDATE usuarios set password= '$pass' WHERE username='$id'";
$conexion->query($query);

    header("location: ../login.php");

?>