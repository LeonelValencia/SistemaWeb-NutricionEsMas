
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
                <li><a href="#">Calcular IMC</a></li>
                <li><a href="#">Username</a>
                    <ul class="submenu">
                        <li><a href="./cerrarsesion.php">Cerrar sesion</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <main>
       <form action="#" method="POST">
         <h1>IMC</h1>
         <h4>Ingrese su peso en KG</h4><input type="text" name="peso" value="">
         <h4>Ingrese su estatura en Mts</h4><input type="text" name="estatura" value="">
         <br></br>
         <input type="submit" value="calcular">
      <br></br>
  </form>
 <?php
 $peso = $_POST['peso'];
  $estatura = $_POST['estatura'];

$imc = $peso/($estatura^2);

if($imc < 18.5){
 echo 'Hola su IMC es'.$imc.'<br>';
  echo '<h3>Esta por debajo del peso</h3>';
}elseif($imc > 18.5 && $imc < 24.9){
echo 'Hola su IMC es'.$imc.'<br>';
  echo '<h3>su nivel es normal</h3>';
}elseif($imc > 24.9 && $imc < 30){
echo 'Hola su IMC es'.$imc.'<br>';
  echo '<h3>Esta en sobrepeso</h3>';
}elseif ($imc > 30){
  echo 'Hola su IMC es'.$imc.'<br>';
  echo '<h3>Esta en obesidad</h3>';
}
?>
    </main>
    <footer>
        <h5>Sitio diseñado por equipo 6</h5>
    </footer>
</body>

</html>
