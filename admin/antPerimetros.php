<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/antPerimetros.css" rel="stylesheet" />
    <title>Perimetros Circunferencias</title>
</head>
<body>
    <?php include("./cabecera.php")?>
    <main>
        <a href="#" class="regresar">>>> Regresar a expediente <<<</a>
        <h1 class="titulo">Perímetros/Circunferencias</h1>
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
                <label for="txtCabeza" class="form">
                    <span>Cabeza:</span>
                    <input type="text" id="txtCabeza" class="inputTxt">
                </label>
                <label for="txtCintura" class="form">
                    <span>Cintura (Parte Mínima):</span>
                    <input type="text" id="txtCintura" class="inputTxt">
                </label>
                <label for="txtCuello" class="form">
                    <span>Cuello:</span>
                    <input type="text" id="txtCuello" class="inputTxt">
                </label>
                <label for="txtGluteos" class="form">
                    <span>Glúteos o Cadera (Parte Máxima):</span>
                    <input type="text" id="txtGluteos" class="inputTxt">
                </label>
                <label for="txtBrazoRel" class="form">
                    <span>Brazo relajado (Mesobraquial):</span>
                    <input type="text" id="txtBrazoRel" class="inputTxt">
                </label>
                <label for="txtMuslo" class="form">
                    <span>Muslo:</span>
                    <input type="text" id="txtMuslo" class="inputTxt">
                </label>
                <label for="txtBrazoFlex" class="form">
                    <span>Brazo flexionado y en contracción (Parte Máxima):</span>
                    <input type="text" id="txtBrazoFlex" class="inputTxt">
                </label>
                <label for="txtMusloMedio" class="form">
                    <span>Muslo medio (Medida oficial):</span>
                    <input type="text" id="txtMusloMedio" class="inputTxt">
                </label>
                <label for="txtAntebrazo" class="form">
                    <span>Antebrazo (Parte Máxima):</span>
                    <input type="text" id="txtAntebrazo" class="inputTxt">
                </label>
                <label for="txtMusloMedioVar" class="form">
                    <span>Muslo medio (Variante: Medida Patella a Pliegue Inguinal):</span>
                    <input type="text" id="txtMusloMedioVar" class="inputTxt">
                </label>
                <label for="txtMunieca" class="form">
                    <span>Muñeca (Parte Mínima):</span>
                    <input type="text" id="txtMunieca" class="inputTxt">
                </label>
                <label for="txtPantorilla" class="form">
                    <span>Pantorrilla (Parte Máxima):</span>
                    <input type="text" id="txtPantorilla" class="inputTxt">
                </label>
                <label for="txtPecho" class="form">
                    <span>Pecho o Tórax:</span>
                    <input type="text" id="txtPecho" class="inputTxt">
                </label>
                <label for="txtTobillo" class="form">
                    <span>Tobillo (Parte Mínima):</span>
                    <input type="text" id="txtTobillo" class="inputTxt">
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