<?php
 
    $sql="SELECT * FROM `usuarios` WHERE username='administrador'";
    $sentencia=$conexion->prepare($sql)
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();

    $sql=$conexion->query("SELECT * FROM `usuarios` WHERE username='administrador'");
?>