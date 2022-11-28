<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/registroUsuario.css" rel="stylesheet" />
    <title>REGISTRARME</title>
</head>
<body>
    <?php include("./cabecera.php")?>
    <main>
          <div class="container">
            <form action="" method="POST" id="formulario">
                <h2>REGISTRARME</h2>
                <?php
                    include ("DB/conexion.php");
                    if ($_POST) {
                        if(empty($_POST["username"]) or empty($_POST["password"]) or empty($_POST["nombres"]) or empty($_POST["apellidoP"]) or empty($_POST["telefono"])){
                            echo '<div class="alerta">Uno de los campos esta vacio</div>';
                        }else{
                            $username=$_POST["username"];
                            $password=$_POST["password"];
                            $nombres=$_POST["nombres"];
                            $apellidoP=$_POST["apellidoP"];
                            $apellidoM=$_POST["apellidoM"];
                            $telefono=$_POST["telefono"];   
                            $rolid=2;  
                            
                            $sql=$conexion->query("INSERT INTO usuarios (idUsuario, username, password, nombres, apellidoP, apellidoM, telefono, rol_id) values (NULL,'$username','$password','$nombres','$apellidoP','$apellidoM','$telefono','$rolid')");
                            if($sql==1){
                            echo '<div class="ok">Usurio registrado correctamente</div>';
                            }else{
                            echo 'ERROR';
                            }
                        }
                    }
                ?>
            <div>
            Correo: <br/><input type="text" name="username"><br/>
            </div>
            <div>
            Password: <br/><input type="password" name="password"><br/>
            </div>
            <div>
            Nombres: <br/><input type="text" name="nombres"><br/>
            </div>
            <div>
            Apellido paterno: <br/><input type="text" name="apellidoP"><br/>
            </div>
            <div>
            Apellidos materno: <br/><input type="text" name="apellidoM"><br/>
            </div>
            <div>
            Telefono: <br/><input type="text" name="telefono"><br/>
            </div>
            <div>
            <input type="submit" value="Registrarme" name="registrar" id="btnGuardar">
            </div>
          </div> 
    </main>
    <?php include("./pie.php")?>
</body>
</html>