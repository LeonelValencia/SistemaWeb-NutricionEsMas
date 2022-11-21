<?php
    include_once 'database.php';
    
    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset(); 

        // destroy the session 
        session_destroy(); 
    }
    
    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location:admin/indexadmin.php');
            break;

            case 2:
            header('location:pacientes/indexpaciente.php');
            break;

            default:
        }
    }

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT *FROM usuarios WHERE username = :username AND password = :password');
        $query->execute(['username' => $username, 'password' => $password]);

        $row = $query->fetch(PDO::FETCH_NUM);
        
        if($row == true){
            $rol = $row[5];
            
            $_SESSION['rol'] = $rol;
            switch($rol){
                case 1:
                    header('location: admin/indexadmin.php');
                break;

                case 2:
                header('location: pacientes/indexpaciente.php');
                break;

                default:
            }
        }else{
            // no existe el usuario
            echo "Nombre de usuario o contraseña incorrecto";
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
    <link href="css/estilos.css" rel="stylesheet" />
    <title>LOGIN</title>
</head>
<body>
    <header>
        <nav id="menu-h">
            
            <ul>
            <img src="assets/images/logo.png" alt="">
                <li><a href="index.php">Home</a></li>   
                <li><a href="#">Iniciar sesion</a></li>
                <li><a href="registro_usuario.php"> Registrarme</a></li>
            </ul>
        </nav>
    </header>   
    <main>
       
    <h1>Bienvenido, ingrese sus datos para acceder al sistema</h1>
    <form action="#" method="POST">
        Username: <br/><input type="text" name="username"><br/>
        Password: <br/><input type="password" name="password"><br/>
        <input type="submit" value="Iniciar sesión">
    </form>
    </main>
    <footer>
        <h5>Sitio diseñado por equipo 6</h5>
    </footer>
</body>
</html>