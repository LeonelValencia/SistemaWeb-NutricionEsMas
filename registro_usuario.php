<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="css/estilos.css" rel="stylesheet" />
    <title>REGISTRARME</title>
</head>
<body>
    <header>
        <nav id="menu-h">
            <img src="assets/images/logo.png" alt="">
            <ul>
                <li><a href="index.php">Home</a></li>   
                <li><a href="login.php">Iniciar sesion</a></li>
                <li><a href="#">Registrarse</a></li>
            </ul>
        </nav>
    </header>
    <main>
          <div class="container">
            <form action="" method="POST" id="formulario">
                <h2>REGISTRARME</h2>
                <?php
                include ("DB/conexion.php");
                include ("controlador/controlador_registrar.php");
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
            Apellidos: <br/><input type="text" name="apellidos"><br/>
            </div>
            <div>
            Telefono: <br/><input type="text" name="telefono"><br/>
            </div>
            <div>
            <input type="submit" value="Registrarme" name="registrar">
            </div>
          </div> 
    </main>
    <footer>
        <h5>Sitio diseñado por equipo 6</h5>
    </footer>
</body>
</html>