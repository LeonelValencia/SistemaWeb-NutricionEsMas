<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/bioOtrosEstudios.css" rel="stylesheet" />
    <title>Otros estudios</title>
</head>
<body>
    <?php include("./cabecera.php")?>
    <main>
        <a href="#" class="regresar">>>> Regresar a expediente <<<</a>
        <h1 class="titulo">Otros estudios</h1>
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
        <h5>Sitio dise??ado por equipo 6</h5>
    </footer>
</body>
</html>