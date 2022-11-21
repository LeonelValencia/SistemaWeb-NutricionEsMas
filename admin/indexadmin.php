<?php
    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: ../login.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location ../login.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/agendarCitas.css" rel="stylesheet" />
    <title>Index administrador</title>
</head>
<body>
    <header>
        <nav id="menu-h">
            <img src="./assets/images/logo.png" alt="">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Mis usuarios</a>
                    <ul class="submenu">
                        <li><a href="#">Agregar nuevo</a></li>
                        <li><a href="#">Usuarios</a></li>
                    </ul>
                </li>
                <li><a href="#">Dieta base</a>
                    <ul class="submenu">
                        <li><a href="#">Crear dieta</a></li>
                        <li><a href="#">Compartir</a></li>
                        <li><a href="#">Ver mis dietas</a></li>
                    </ul>
                </li>
                <li><a href="#">Citas</a>
                    <ul class="submenu">
                        <li><a href="#">Agregar cita</a></li>
                        <li><a href="#">(1)Peticion de cita</a></li>
                    </ul>
                </li>
                <li><a href="#">Herramientas</a>
                    <ul class="submenu">
                        <li><a href="#">Calculadora IMC</a></li>
                    </ul>
                </li>
                <li><a href="#">Pagos</a></li>
                <li><a href="#">Iniciar sesion</a></li>
                <li><a href="cerrarsesion.php">Cerrar sesion</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Index ADMIN</h1>
        
    </main>
    <footer>
        <h5>Sitio diseñado por equipo 6</h5>
    </footer>
</body>
</html>