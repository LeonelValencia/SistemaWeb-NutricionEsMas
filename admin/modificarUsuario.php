<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/modificarUsuario.css" rel="stylesheet" />
    <title>Agregar usuario</title>
</head>
<body>
    <?php include("./cabecera.php")?>
    <main>
        <h1 class="titulo">Datos del usuario</h1>

        <form action="" method="POST" id="formulario">
            <?php
                $idUser= $_GET['id'];
                include ("./DB/conexion.php");
                if ($_POST) {
                    if(empty($_POST["objetivo"]) or empty($_POST["actividadF"]) or empty($_POST["peso"]) or empty($_POST["estatura"])){
                        echo '<div class="alerta">Uno de los campos esta vacio</div>';
                    }else{
                        $telefono=$_POST["telefono"];    
                        $genero=$_POST["genero"];
                        $objetivo=$_POST["objetivo"];
                        $actividadF=$_POST["actividadF"];
                        $peso=$_POST["peso"];
                        $estatura=$_POST["estatura"];
                        $nacimiento=$_POST["nacimiento"]; 
                            
                        $con1=new Conexion();
                        $sql="UPDATE `datosbasicos` SET `genero`='$genero', `actividadFisica`='$actividadF', `estatura`=$estatura, `objetivos`='$objetivo', `pesoI` = $peso, `nacimiento` = '$nacimiento' WHERE `datosbasicos`.`idUsuario` = $idUser;";
                        $con1->ejecutar($sql); 
                        $sql2="UPDATE `usuarios` SET `telefono` = $telefono WHERE `usuarios`.`idUsuario` = $idUser;";
                        $con1->ejecutar($sql2); 

                        echo '<div class="ok">Usurio registrado correctamente</div>';
                    }
                }
            ?>
                <label for="txtTel">
                    <span>Telefono</span>
                    <input type="tel" name="telefono" id="txtTel">
                </label>
                <label for="generos">
                    <span>Genero*</span>
                    <select id="generos" required name="genero">
                        <option value="Femenino">Femenino</option>
                        <option value="Masculino">Masculino</option>
                    </select>
                </label>
                <label for="objetos">
                    <span>Objetivos*</span>
                    <select id="objetos" required name="objetivo">
                        <option value="Perder peso">Perder peso</option>
                        <option value="Aumentar masa corporal">Aumentar masa corporal</option>
                        <option value="Mantener peso">Mantener peso</option>
                    </select>
                </label>
                <label for="actividadesFisicas">
                    <span>Actividad fisica*</span>
                    <select id="actividadesFisicas" name="actividadF">
                        <option value="Sedentario">Sedentario</option>
                        <option value="Ligeramente activo">Ligeramente activo</option>
                        <option value="Moderadamente activo">Moderadamente activo</option>
                        <option value="Activo">Activo</option>
                        <option value="Muy activo">Muy activo</option>
                    </select>
                </label>
                <label for="txtPeso">
                    <span>Peso inicial*:</span>
                    <input type="number" name="peso" id="txtPeso" min="30" required>
                </label>
                <label for="txtEstatura">
                    <span>Estatura*(cms):</span>
                    <input type="number" name="estatura" id="txtEstatura" min="130" required>
                </label>
                <label for="txtDateNacimiento">
                    <span>Fecha de nacimiento:</span>
                    <input type="date" name="nacimiento" id="txtDateNacimiento">
                </label>
            </div>

            <input type="submit" value="Guardar" id="btnGuardar">
        </form>
    </main>
    <footer>
        <h5>Sitio diseñado por equipo 6</h5>
    </footer>
</body>
</html>