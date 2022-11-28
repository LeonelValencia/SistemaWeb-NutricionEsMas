<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/eliminarUsuario.css" rel="stylesheet" />
    <title>Agregar usuario</title>
</head>
<body>
    <?php include("./cabecera.php")?>
    <main>
        <h1 class="titulo">Datos del usuario</h1>

        <?php
            $idUser= $_GET['id'];
            include ("./DB/conexion.php");

            $con1=new Conexion();
            $sql="DELETE FROM datosbasicos WHERE `datosbasicos`.`id` = 2";
            $sql2="DELETE FROM usuarios WHERE `usuarios`.`idUsuario` = $idUser";
            $con1->ejecutar($sql);
            $con1->ejecutar($sql2);
            echo '<div class="ok">Usuario eliminado correctamente</div>';     
        ?>
    </main>
    <footer>
        <h5>Sitio diseñado por equipo 6</h5>
    </footer>
</body>
</html>