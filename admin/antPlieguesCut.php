<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/antPlieguesCut.css" rel="stylesheet" />
    <title>Pliegues cutaneos</title>
</head>
<body>
    <?php include("./cabecera.php")?>
    <main>
        <a href="#" class="regresar">>>> Regresar a expediente <<<</a>
        <h1 class="titulo">Pliegues Cutáneos</h1>
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
                <label for="txtTriceps" class="form">
                    <span>Tríceps:</span>
                    <input type="text" id="txtTriceps">
                </label>
                <label for="txtSupra" class="form">
                    <span>Supraespinal:</span>
                    <input type="text" id="txtSupra">
                </label>
                <label for="txtBiceps" class="form">
                    <span>Bíceps:</span>
                    <input type="text" id="txtBiceps">
                </label>
                <label for="txtAbdominal" class="form">
                    <span>Abdominal:</span>
                    <input type="text" id="txtAbdominal">
                </label>
                <label for="txtSubes" class="form">
                    <span>Subescapular:</span>
                    <input type="text" id="txtSubes">
                </label>
                <label for="txtMuslo" class="form">
                    <span>Muslo anterior:</span>
                    <input type="text" id="txtMuslo">
                </label>
                <label for="txtCresta" class="form">
                    <span>Cresta iliaca (Suprailíaco):</span>
                    <input type="text" id="txtCresta">
                </label>
                <label for="txtPantorrila" class="form">
                    <span>Pantorrilla Medial:</span>
                    <input type="text" id="txtPantorrila">
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