<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/antDiametros.css" rel="stylesheet" />
    <title>Diametros</title>
</head>
<body>
    <?php include("./cabecera.php")?>
    <main>
        <a href="#" class="regresar">>>> Regresar a expediente <<<</a>
        <h1 class="titulo">Diámetros</h1>
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
                <label for="txtBiepi" class="form">
                    <span>Biepicondíleo del húmero (codo):</span>
                    <input type="text" id="txtBiepi">
                </label>
                <label for="txtAntero" class="form">
                    <span>Antero posterior del tórax:</span>
                    <input type="text" id="txtAntero">
                </label>
                <label for="txtBiepiFemur" class="form">
                    <span>Biepicondíleo del fémur:</span>
                    <input type="text" id="txtBiepiFemur">
                </label>
                <label for="txtBiileo" class="form">
                    <span>Biileocrestal:</span>
                    <input type="text" id="txtBiileo">
                </label>
                <label for="txtBiacro" class="form">
                    <span>Biacromial:</span>
                    <input type="text" id="txtBiacro">
                </label>
                <label for="txtBimale" class="form">
                    <span>Bimaleolar (Tobillo):</span>
                    <input type="text" id="txtBimale">
                </label>
                <label for="txtTransverso" class="form">
                    <span>Transverso del tórax:</span>
                    <input type="text" id="txtTransverso">
                </label>
                <label for="txtBiepiMun" class="form">
                    <span>Biepicondíleo de la muñeca:</span>
                    <input type="text" id="txtBiepiMun">
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