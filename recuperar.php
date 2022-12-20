<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="css/estilos.css" rel="stylesheet" />
    <title>RECUPERAR CONTRASEÑA</title>
</head>
<body>
    <header>
        <nav id="menu-h">
            <ul>
            <img src="assets/images/logo.png" alt="">
                <li><a href="index.html">Home</a></li>   
                <li><a href="login.php ">Iniciar sesion</a></li>
                <li><a href="registro_usuario.php"> Registrarme</a></li>
            </ul>
        </nav>
    </header>   
    <main>
    <form action="controlador/recovery.php" method="POST">
        <h1>Recuperar contraseña<h2>
        <h2 class="h3 mb-3fw-normal">Ingrese su correo</h2>
        <div class="form-floating my-3">
            <br><label for="floatingInput">Correo Electronico</label></br>
            <br><input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="usuario"></br> 
        </div>
        <button class="w-100 btn btn-lg btn primary" type="submit">Recuperar contraseña</button>
    </form>
    </main>
    <footer>
        <h5>Sitio diseñado por equipo 6</h5>
    </footer>
</body>
</html>