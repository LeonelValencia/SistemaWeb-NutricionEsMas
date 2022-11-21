<?php
    if(!empty($_POST["registrar"])){
        if(empty($_POST["username"]) or empty($_POST["password"]) or empty($_POST["nombres"]) or empty($_POST["apellidos"]) or empty($_POST["telefono"])){
            echo '<div class="alerta">Uno de los campos esta vacio</div>';
        }else{
            $username=$_POST["username"];
            $password=$_POST["password"];
            $nombres=$_POST["nombres"];
            $apellidos=$_POST["apellidos"];
            $telefono=$_POST["telefono"];   
            $rolid=2;  

           $sql=$conexion->query("INSERT INTO usuarios (username, password, nombres, apellidos, telefono, rol_id) values ('$username','$password','$nombres','$apellidos','$telefono','$rolid')");
           if($sql==1){
            echo '<div>Usurio registrado correctamente</div>';
           }else{
            echo 'ERROR';
           }
        }
    }
?>