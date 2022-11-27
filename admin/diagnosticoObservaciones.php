<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/DiagnosticoObservaciones.css" rel="stylesheet" />
    <title>Diagnostico y observaciones</title>
</head>
<body>
    <?php include("./cabecera.php")?>
    <main>
        <h1 class="titulo">Diagnóstico/Observaciones de Carls uu</h1>
        <form action="" id="formulario">
            <label for="date" class="fecha">
                <span>Notas/Observaciones del <img src="./assets/icons/calendar.svg" alt="fecha"></span>
                <input type="date" id="date">
            </label>
            <br>
            <label for="txtTitulo" id="tituloPerfil">
                <span>Titulo*</span>
                <input type="text" id="txtTitulo">
            </label>
            <br>
            <label for="txtDescripcion">
                <span>Observaciones</span> <br>
                <textarea name="txtDescripcion" id="txtDescripcion"></textarea>
            </label>
            <br>
            <input type="submit" value="Guardar" id="btnGuardar">
        </form>
    </main>
    <footer>
        <h5>Sitio diseñado por equipo 6</h5>
    </footer>
</body>
</html>