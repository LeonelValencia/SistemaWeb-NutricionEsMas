<?php
    include ("DB/conexion.php");
    $con=new Conexion();
    $resultado= $con->consultar("SELECT u.idUsuario,u.nombres,u.apellidoP,d.pesoI,d.objetivos FROM datosbasicos as d INNER JOIN usuarios as u ON d.idUsuario=u.idUsuario;");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/usuariosRegistrados.css" rel="stylesheet" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>UsuariosRegistrados</title>
</head>

<body>
<?php include("./cabecera.php")?>

    <h1 class="titulo"> USUARIOS REGISTRADOS</h1>

    <div class="container" id="usuarios">
        <div class="row">
            <div class="col-4" style="display: contents;">
                <?php foreach($resultado as $cliente){ ?>
                <div class="card" style="width: 18rem; margin: 20px"> <img src="./assets/images/woman.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo($cliente['nombres']." ".$cliente['apellidoP']); ?></h5>
                        <p class="card-text">OBJETIVO: <?php echo($cliente['objetivos']); ?> </p>
                        <p class="card-text">PESO INICIAL: <?php echo($cliente['pesoI']); ?> kilos.</p>
                        <p class="card-text">PESO ACTUAL: SIN REGISTRO.</p>
                        
                        <a href="./Expediente.php?id=<?php echo($cliente['idUsuario']); ?>" class="btn btn-primary">Ver expediente</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <footer style="position: fixed;">  
        <h5>Sitio diseñado por equipo 6</h5>
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>