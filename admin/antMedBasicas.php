<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/antMedBasicas.css" rel="stylesheet" />
    <title>Mediciones basicas/talla</title>
</head>
<body>
    <?php include("./cabecera.php")?>
    <main>
        <a href="#" class="regresar">>>> Regresar a expediente <<<</a>
        <h1 class="titulo">Mediciones Básicas/Talla</h1>
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
            <h5>Unidad de medición: Centimetros</h5>
            <br>

            <div class="grid">
                <label for="txtPeso" class="form">
                    <span>Peso:</span>
                    <input type="text" id="txtPeso">
                </label>
                <label for="txtEstatura" class="form">
                    <span>Estatura:</span>
                    <input type="text" id="txtEstatura">
                </label>
                <label for="txtTallaSen" class="form">
                    <span>Talla sentada:</span>
                    <input type="text" id="txtTallaSen">
                </label>
                <label for="txtEnvergadura" class="form">
                    <span>Envergadura de los brazos:</span>
                    <input type="text" id="txtEnvergadura">
                </label>
            </div>
            <div id="archivosNota">
                <label for="txtDescripcion">
                    <span>Notas</span> <br>
                    <textarea name="txtDescripcion" id="txtDescripcion"></textarea>
                </label>
            </div>

            <input type="submit" value="Guardar" id="btnGuardar">
        </form>
    </main>
    <footer>
        <h5>Sitio diseñado por equipo 6</h5>
    </footer>
</body>
</html>