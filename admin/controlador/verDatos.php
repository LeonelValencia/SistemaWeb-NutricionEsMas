<?php
 
    $sql="SELECT * FROM `usuarios` WHERE username='administrador'";

    $sentencia=$conexion->prepare($sql);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();
    print_r($resultado);
?>