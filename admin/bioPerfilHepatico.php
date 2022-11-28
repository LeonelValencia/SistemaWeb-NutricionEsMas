<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/bioPerfilHepatico.css" rel="stylesheet" />
    <title>Perfil hepatico</title>
</head>
<body>
    <?php include("./cabecera.php")?>
    <main>
        <a href="#" class="regresar">>>> Regresar a expediente <<<</a>
        <h1 class="titulo">Perfil Hepático</h1>
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
                    <span>Colesterol: </span>
                    <input type="number" id="txtColesterol">
                </label>
                <label for="txtFosfata" class="form">
                    <span>Fosfatasa Alcalina: </span>
                    <input type="text" id="txtFosfata">
                </label>
                <label for="txtBilirrubina" class="form">
                    <span>Bilirrubina total: </span>
                    <input type="text" id="txtBilirrubina">
                </label>
                <label for="txtGlobulinas" class="form">
                    <span>Globulinas: </span>
                    <input type="text" id="txtGlobulinas">
                </label>
                <label for="txtAlbumina" class="form">
                    <span>Albúmina: </span>
                    <input type="text" id="txtAlbumina">
                </label>
                <label for="txtRelAlbu" class="form">
                    <span>Rel. Albúmina/Globulina: </span>
                    <input type="text" id="txtRelAlbu">
                </label>
                <label for="txtProteinas" class="form">
                    <span>Proteínas Totales: </span>
                    <input type="text" id="txtProteinas">
                </label>
                <label for="txtGGT" class="form">
                    <span>GGT: </span>
                    <input type="text" id="txtGGT">
                </label>
                <label for="txtTGO" class="form">
                    <span>T.G.O. (AST): </span>
                    <input type="text" id="txtTGO">
                </label>
                <label for="txtBilirrubinaDir" class="form">
                    <span>Bilirrubina Directa: </span>
                    <input type="text" id="txtBilirrubinaDir">
                </label>
                <label for="txtTGP" class="form">
                    <span>T.G.P. (ALT): </span>
                    <input type="text" id="txtTGP">
                </label>
                <label for="txtBilirrubinaIndir" class="form">
                    <span>Bilirrubina Indirecta: </span>
                    <input type="text" id="txtBilirrubinaIndir">
                </label>

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