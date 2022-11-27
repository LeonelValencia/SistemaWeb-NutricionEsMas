<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/medidasGrasas.css" rel="stylesheet" />
    <title>Medidas | Grasas</title>
</head>
<body>
    <?php include("./cabecera.php")?>
    <main>
        <h1 class="titulo">Agregar Medidas</h1>
        <form action="" id="formulario">
            <label for="date" class="fecha">
                <span><img src="./assets/icons/calendar.svg" alt="fecha"></span>
                <input type="date" id="date">
            </label>
            <br>
            <label for="txtTitulo" id="tituloPerfil">
                <span>Titulo*</span>
                <input type="text" id="txtTitulo">
            </label>
            <br>
            <label for="txtPeso" class="form">
                <span>Peso:</span>
                <input type="number" id="txtPeso" min="10">
            </label>
            <label for="txtPorcentaje" class="form">
                <span>Porcentaje de grasa corporal:</span>
                <input type="number" id="txtPorcentaje" min="1" placeholder="%">
            </label>
            <label for="txtDescripcion">
                <span>Notas</span> <br>
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