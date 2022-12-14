<?php 
    $idUser= $_GET['id'];
    include ("DB/conexion.php");
    $con=new Conexion();
    $resultado= $con->consultar("SELECT u.nombres,u.apellidoP,d.* FROM datosbasicos as d INNER JOIN usuarios as u ON d.idUsuario=u.idUsuario WHERE d.idUsuario=$idUser;");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/expediente.css" rel="stylesheet" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>UsuariosRegistrados</title>
</head>

<body>
    <?php include("./cabecera.php")?>
    <?php foreach($resultado as $cliente){ ?>
    <h1 class="titulo"> EXPEDIENTE DE <?php echo($cliente['nombres']." ".$cliente['apellidoP']); ?></h1>

    <div class="container">
        <div class="row">
            <div class="col-4" id="informacionBasica">
                <div class="card mb-3" style="max-width: 640px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="./assets/images/woman.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                        
                            <div class="card-body">
                                <h5 class="card-title">INFORMACION BASICA</h5>
                                <p class="card-text">Fecha De Nacimiento: <?php echo($cliente['nacimiento']); ?></p>
                                <p class="card-text">Actividad Fisica: <?php echo($cliente['actividadFisica']); ?></p>
                                <p class="card-text">Peso Inicial: <?php echo($cliente['pesoI']); ?> kilos</p>
                                <p class="card-text">Objetivos: <?php echo($cliente['objetivos']); ?></p>
                                <p class="card-text">Estatura: <?php echo($cliente['estatura']); ?> cms</p>
                                <p class="card-text">Peso Actual: Sin registro</p>
                            </div>
    <?php } ?>
                        </div>
                        <a href="./dietaManual.php" class="btn btn-success col-md-3">Crear Dietas</a>
                        <a href="./dietaCompartir.php" class="btn btn-success col-md-4">Compartir Dietas</a>
                        <a href="./dietaHistorial.php" class="btn btn-success col-md-3">Ver Dietas</a>
                    </div>
                </div>
                <a href="./agendarCitas.php?id=<?php echo($idUser); ?>" class="btn btn-success col-md-4">Agregar Cita</a>
            </div>

            <div class="col-7" id="dataBasicAvan">
                <table class="table">
                    <th>Basicos</th>
                    <tr>
                        <td>Peso/Medidas/Grasas</td>
                        <td>Ver </td>
                        <td><a href="./basicMedidasGrasas.php">Agregar</a></td>
                        <td> Diagnosticos</td>
                        <td>Ver</td>
                        <td><a href="./diagnosticoObservaciones.php">Agregar</a></td>
                    </tr>

                </table>
                <table class="table">
                    <th>Avanzados</th>
                    <tr>
                        <td>Antecedentes Clinicos</td>
                        <td>Ver</td>
                        <td><a href="./antecedentesClinicos.php">Modificar</a></td>
                        <td> Historial IMC</td>
                        <td> Ver</td>
                        <td><a href="./calculadoraIMC.php">Agregar</a></td>
                    </tr>
                    <tr class="avanzadoTipo">
                        <td>Bioquimicos</td>
                    </tr>
                    <tr>
                        <td>Perfil Hepatico</td>
                        <td>Ver </td>
                        <td><a href="./bioPerfilHepatico.php">Agregar</a></td>
                        <td> Quimica Sanguinea</td>
                        <td>Ver</td>
                        <td><a href="./bioQuimicaSanguinea.php">Agregar</a></td>
                    </tr>
                    <tr>
                        <td>Perfil De Lipidos</td>
                        <td>Ver </td>
                        <td><a href="./bioPerfilLipidos.php">Agregar</a></td>
                        <td>Perfil Tiroideo</td>
                        <td> Ver</td>
                        <td><a href="./bioPerfilTiroideo.php">Agregar</a></td>
                    </tr>
                    <tr>
                        <td>Otros Estudios</td>
                        <td>Ver </td>
                        <td><a href="./bioOtrosEstudios.php">Agregar</a></td>
                    </tr>
                    <tr class="avanzadoTipo">
                        <td>Mediciones Antropom??tricas</td>
                    </tr>
                    <tr>
                        <td>Plieges Cutaneos</td>
                        <td>Ver</td>
                        <td><a href="./antPlieguesCut.php">Agregar</a></td>
                        <td>Perimetros / Circunferencias</td>
                        <td>Ver</td>
                        <td><a href="./antPerimetros.php">Agregar</a></td>
                    </tr>
                    <tr>
                        <td>Mediciones Basicas/Tallas</td>
                        <td>Ver</td>
                        <td><a href="./antMedBasicas.php">Modificar</a></td>
                        <td>Longitudes y alturas segmentarias</td>
                        <td>Ver</td>
                        <td><a href="./antLongitudes.php">Modificar</a></td>
                    </tr>
                    <tr>
                        <td>Diametros</td>
                        <td>Ver</td>
                        <td><a href="./antDiametros.php">Modificar</a></td>
                    </tr>
                </table>
            </div>

        </div>
        <div id="btnUpdateDelete">
            <a href="./modificarUsuario.php?id=<?php echo($idUser); ?>" class="btn btn-primary btn-lg btnGuardar">Modificar</a>
            <a href="./eliminarUsuario.php?id=<?php echo($idUser); ?>" class="btn btn-primary btn-lg btnGuardar">Eliminar</a>
        </div>
    </div>

    <footer>
        <h5>Sitio dise??ado por equipo 6</h5>
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>