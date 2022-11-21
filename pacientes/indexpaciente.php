<?php
    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: ../login.php');
    }else{
        if($_SESSION['rol'] != 2){
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
    <link href="css/agendarCitas.css" rel="stylesheet" />
    <title>INICIO PACIENTE</title>
</head>
<body>
    <header>
        <nav id="menu-h">
            <img src="assets/images/logo.png" alt="">
            <ul>
                <li><a href="indexpaciente.php">Home</a></li>
                <li><a href="cerrarsesion.php">Cerrar sesion</a></li>
            </ul>
        </nav>
    </header>
    <main>
       
    <h1>Index pacientes</h1>
           
    </main>
    <footer>
        <h5>Sitio diseñado por equipo 6</h5>
    </footer>
</body>
</html>