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
    <link href="./css/indexPaciente.css" rel="stylesheet" />
    <title>INICIO PACIENTE</title>
</head>
<body>
    <header>
        <nav id="menu-h">
            <img src="../assets/images/logo.png" alt="">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Dieta base</a>
                    <ul class="submenu">
                        <li><a href="./historialDietas.html">Ver mis dietas</a></li>
                    </ul>
                </li>
                <li><a href="#">Citas</a>
                    <ul class="submenu">
                        <li><a href="./agendarCitas.html">Agregar cita</a></li>
                    </ul>
                </li>
                <li><a href="calcularimc.php">Calcular IMC</a></li>
                <li><a href="#">Username</a>
                    <ul class="submenu">
                        <li><a href="./cerrarsesion.php">Cerrar sesion</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <main>
       <img src="../assets/images/principal.png" alt="frutas y verduras" id="imgPrincipal">
        <h1 class="titulo">Hola bienvenido al sitio NUTRICION ES MAS</h1>
        <section id="contactanos">
            <div id="divUbicacion">
                <img src="../assets/icons/home.svg" alt="ubicacion">
                <h3>UBICACIÓN</h3>
                <h4>Morelos, México</h4>
            </div>
            <div id="divTelefono">
                <img src="../assets/icons/phone.svg" alt="ubicacion">
                <h3>TELÉFONO</h3>
                <h4><a href="https://l.instagram.com/?u=https%3A%2F%2Fwalink.co%2F9f767d&e=ATNkkNgb3IMtpTGmbzQBfXqaGSxHnWArHe104hS_jrwkIvZBET3ur-WMl8Ebus4D1UuirnxAFmJNLpaw3rL8jSo&s=1">(+52) 777 446 61 55</a></h4>
            </div>
            <div id="divEmail">
                <img src="../assets/icons/envelope.svg" alt="ubicacion">
                <h3>EMAIL</h3>
                <h4>katya.os.nut@gmail.com</h4>
            </div>
            <div id="divSocial">
                <img src="../assets/icons/hashtag.svg" alt="ubicacion">
                <h3>SOCIAL MEDIA</h3>
                <div id="socialMedia">
                    <a href="https://www.facebook.com/profile.php?id=100087171421826"><img src="../assets/icons/facebook.svg" alt="facebook"></a>
                    <a href="https://www.instagram.com/nutri.katya.osorio/"><img src="../assets/icons/instagram.svg" alt="instagra"></a>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <h5>Sitio diseñado por equipo 6</h5>
    </footer>
</body>

</html>
