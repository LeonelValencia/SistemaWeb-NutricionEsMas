<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/dietaManual.css" rel="stylesheet" />
    <title>Dieta manual</title>
</head>
<body>
    <?php include("./cabecera.php")?>
    <main>
        <h2>- Crear dieta manual y/o adjuntos (imagen/pdf)</h2>
        <form action="" id="formulario">
            <label for="txtTitulo" id="tituloPerfil">
                <span>Titulo*</span>
                <input type="text" name="txtTitulo" id="txtTitulo">
            </label>
            <br>
            <div>
                <label for="txtCalorias">
                    <span>Calorias</span>
                    <input type="number" name="txtCalorias" id="txtCalorias" min="0">
                </label>
                <label for="txtComidas">
                    <span>Comidas</span>
                    <input type="number" name="txtComidas" id="txtComidas" min="0" max="7">
                </label>
            </div>

            <div class="grid">
                <label for="txtDescripcion">
                    <span>Crear dieta desde campo de texto</span> <br>
                    <textarea name="txtDescripcion" id="txtDescripcion"></textarea>
                </label>

                <label for="file1">
                    <span>Adjuntar dieta desde archivo (pdf,imagen)</span> <br>
                    <input type="file" name="" id="file1"> <br>
                    <input type="file" name="" id=""> <br>
                    <input type="file" name="" id=""> <br>
                    <input type="file" name="" id=""> <br>
                    <input type="file" name="" id=""> <br>
                    <input type="file" name="" id=""> <br>
                </label>
            </div>   

            <input type="submit" value="Guardar" id="btnGuardar">
        </form>
        <h2><a href="#">- Crear dieta desde sistema </a></h2>
    </main>
    <footer>
        <h5>Sitio diseñado por equipo 6</h5>
    </footer>
</body>
</html>