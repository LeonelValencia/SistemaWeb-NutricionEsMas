<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/bioPerfilLipidos.css" rel="stylesheet" />
    <title>Perfil de Lipidos</title>
</head>
<body>
    <?php include("./cabecera.php")?>
    <main>
        <a href="#" class="regresar">>>> Regresar a expediente <<<</a>
        <h1 class="titulo">Perfil de Lípidos</h1>
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

            <div class="grid">
                <label for="txtColesterol" class="form">
                    <span>Colesterol Sérico Total:</span>
                    <input type="text" id="txtColesterol">
                </label>
                <label for="txtTrigliceridos" class="form">
                    <span>Triglicéridos séricos:</span>
                    <input type="text" id="txtTrigliceridos">
                </label>
                <label for="txtHDL" class="form">
                    <span>HDL, Lipoproteínas de alta densidad:</span>
                    <input type="text" id="txtHDL">
                </label>
                <label for="txtVLDL" class="form">
                    <span>VLDL, Liproteínas de muy baja densidad sérica:</span>
                    <input type="text" id="txtVLDL">
                </label>
                <label for="txtLDL" class="form">
                    <span>LDL, Lipoproteínas de baja densidad sérica:</span>
                    <input type="text" id="txtLDL">
                </label>
                <label for="txtLipidos" class="form">
                    <span>Lipidos totales:</span>
                    <input type="text" id="txtLipidos">
                </label>
                <label for="txtIndice" class="form">
                    <span>Índice Aterogénico:</span>
                    <input type="text" id="txtIndice">
                </label>
            </div>
            <div id="archivosNota">
                <label for="file1">
                    <img src="./assets/icons/file-image.svg" alt="icono de archivo imagen">
                    <img src="./assets/icons/file-pdf.svg" alt="icono de archivo pdf">
                    <span>Adjuntar Imagen/PDF</span> <br>
                    <input type="file" name="" id="file1"> <br>
                    <input type="file" name="" id=""> <br>
                    <input type="file" name="" id=""> <br>
                    <input type="file" name="" id=""> <br>
                    <input type="file" name="" id=""> <br>
                    <input type="file" name="" id=""> <br>
                </label>
    
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