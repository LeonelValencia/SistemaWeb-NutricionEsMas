<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/agendarCitas.css" rel="stylesheet" />
    <title>Agendar citas</title>
</head>
<body>
    <?php include("./cabecera.php")?>
    <main>
        <a href="./Expediente.php" class="regresar">>>> Regresar a registros <<<</a>
        <h1 class="titulo">Agregar cita</h1>
        <form action="" method="POST" id="formulario">
        <?php
            $idUser= $_GET['id'];
            include ("./DB/conexion.php");
            $chkMail="";
            if ($_POST) {
                if(empty($_POST["tituloCita"])){
                    echo '<div class="alerta">Uno de los campos esta vacio</div>';
                }else{
                    $tituloCita=$_POST["tituloCita"];
                    $deDate=$_POST["deDate"];
                    $deTime=$_POST["deTime"].":00";
                    $aDate=$_POST["aDate"];
                    $aTime=$_POST["aTime"].":00";
                    $descripcion=$_POST["descripcion"];   
                    $chkMail= (isset($_POST['chkMail'])=="1" )?"checked":"0" ; 
                         
                    echo($deTime);
                    echo"\n";
                    echo($chkMail);
                    echo"\n";
                    echo "$aTime".":00";
                    // $con1=new Conexion();
                    // $sql="INSERT INTO usuarios (idUsuario, username, password, nombres, apellidoP, apellidoM, telefono, rol_id) values (NULL,'$username','$password','$nombres','$apellidoP','$apellidoM','$telefono','$rolid')";
                    // $lasId=$con1->ejecutar($sql); 

                    // if($lasId >0){
                    //     echo '<div class="ok">Usurio registrado correctamente</div>';
                    //     }else{
                    //     echo '<div class="alerta">ERROR</div>';
                    // }
                }
            }
        ?>
            <label for="txtTituloCita" class="form">
                <span>Titulo*</span>
                <input type="text" name="tituloCita" id="txtTituloCita" require>
            </label>
            <br>

            <label for="deDate" class="form">
                <span>De*</span>
                <input type="date" name="deDate" id="deDate" required>
                <input type="time" name="deTime" id="deTime" required>
            </label>
            <br>

            <label for="aDate" class="form">
                <span>A*</span>
                <input type="date" name="aDate" id="aDate">
                <input type="time" name="aTime" id="aTime">
            </label>
            <br>

            <label for="txtDescripcion"class="form">
                <span>Descripción</span> <br>
                <textarea name="descripcion" id="txtDescripcion"></textarea>
            </label>
            <br>

            <label for="chkMail" class="form">
                <input type="checkbox" name="chkMail" value="si" id="chkMail">
                <span class="email">Enviar e-mail de cita a usuario</span>
            </label>
            <br>
            <input type="submit" value="Guardar" id="btnGuardar">
        </form>
    </main>
    <footer>
        <h5>Sitio diseñado por equipo 6</h5>
    </footer>
</body>
</html>