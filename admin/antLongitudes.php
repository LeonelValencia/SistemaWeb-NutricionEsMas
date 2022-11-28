<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/antLongitudes.css" rel="stylesheet" />
    <title>Longitudes y alturas segmentarias</title>
</head>
<body>
    <?php include("./cabecera.php")?>
    <main>
        <a href="#" class="regresar">>>> Regresar a expediente <<<</a>
        <h1 class="titulo">Longitudes y Alturas segmentarias</h1>
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
                <label for="txtAcromial" class="form">
                    <span>Acromial a Radial:</span>
                    <input type="text" id="txtAcromial">
                </label>
                <label for="txtFemur" class="form">
                    <span>(Fémur) Longitud Trocánter a Tibial lateral:</span>
                    <input type="text" id="txtFemur">
                </label>
                <label for="txtRadial" class="form">
                    <span>Radial a Estiloideo:</span>
                    <input type="text" id="txtRadial">
                </label>
                <label for="txtAlturaTibial" class="form">
                    <span>Altura Tibial lateral:</span>
                    <input type="text" id="txtAlturaTibial">
                </label>
                <label for="txtEstiloide" class="form">
                    <span>Estiloide medial a Dactilar:</span>
                    <input type="text" id="txtEstiloide">
                </label>
                <label for="txtTibial" class="form">
                    <span>Tibial medial a Mayoral medial:</span>
                    <input type="text" id="txtTibial">
                </label>
                <label for="txtAlturaIli" class="form">
                    <span>Altura Iliespinal:</span>
                    <input type="text" id="txtAlturaIli">
                </label>
                <label for="txtLongitudPie" class="form">
                    <span>Longitud del pie:</span>
                    <input type="text" id="txtLongitudPie">
                </label>
                <label for="txtAlturaTrocater" class="form">
                    <span>Altura Trocánter:</span>
                    <input type="text" id="txtAlturaTrocater">
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