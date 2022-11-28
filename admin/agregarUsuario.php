<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/agregarUsuarios2.css" rel="stylesheet" />
    <title>Agregar usuario</title>
</head>
<body>
    <?php include("./cabecera.php")?>
    <main>
        <h1 class="titulo">Datos del usuario</h1>
        <?php
            include ("./DB/conexion.php");
            if ($_POST) {
                if(empty($_POST["email"]) or empty($_POST["password"]) or empty($_POST["nombres"]) or empty($_POST["apellidoP"]) or empty($_POST["telefono"])){
                    echo '<div class="alerta">Uno de los campos esta vacio</div>';
                }else{
                    $username=$_POST["email"];
                    $password=$_POST["password"];
                    $nombres=$_POST["nombres"];
                    $apellidoP=$_POST["apellidoP"];
                    $apellidoM=$_POST["apellidoM"];
                    $telefono=$_POST["telefono"];   
                    $rolid=2;  
                    $genero=$_POST["genero"];
                    $objetivo=$_POST["objetivo"];
                    $actividadF=$_POST["actividadF"];
                    $peso=$_POST["peso"];
                    $estatura=$_POST["estatura"];
                    $nacimiento=$_POST["nacimiento"]; 
                         
                    $con1=new Conexion();
                    $sql="INSERT INTO usuarios (idUsuario, username, password, nombres, apellidoP, apellidoM, telefono, rol_id) values (NULL,'$username','$password','$nombres','$apellidoP','$apellidoM','$telefono','$rolid')";
                    $lasId=$con1->ejecutar($sql); 
                    $sql2="INSERT INTO `datosbasicos` (`id`, `idUsuario`, `genero`, `actividadFisica`, `estatura`, `objetivos`, `pesoI`, `nacimiento`) VALUES (NULL, '$lasId', '$genero', '$actividadF', '$estatura', '$objetivo', '$peso', '$nacimiento');";
                    $con1->ejecutar($sql2); 

                    if($lasId >0){
                        echo '<div class="ok">Usurio registrado correctamente</div>';
                        }else{
                        echo '<div class="alerta">ERROR</div>';
                    }
                }
            }
        ?>
        <form action="" method="POST" id="formulario">
            <div class="grid">
                <label for="txtNombre">
                    <span>Nombre(s)*</span>
                    <input type="text" name="nombres" id="txtNombre" required>
                </label>
                <label for="txtAP">
                    <span>Apellido Paterno*</span>
                    <input type="text" name="apellidoP" id="txtAP" required>
                </label>
                <label for="txtAM">
                    <span>Apellido Materno</span>
                    <input type="text" name="apellidoM" id="txtAM">
                </label>
                <label for="txtEmail">
                    <span>Email*</span>
                    <input type="email" name="email" id="txtEmail" required>
                </label>
                <label for="txtPassword">
                    <span>Contraseña*</span>
                    <input type="password" name="password" id="txtPassword" required>
                </label>
                <label for="txtTel">
                    <span>Telefono</span>
                    <input type="tel" name="telefono" id="txtTel">
                </label>
                <label for="generos">
                    <span>Genero*</span>
                    <!-- <input list="generos"> -->
                    <!-- <datalist id="generos">
                        <option value="Femenino">
                        <option value="Masculino">
                    </datalist> -->
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