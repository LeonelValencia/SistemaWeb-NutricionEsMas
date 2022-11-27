<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/compartirDietas.css" rel="stylesheet" />
    <title>Compartir dietas</title>
</head>
<body>
    <?php include("./cabecera.php")?>
    <main>
        <h1 class="titulo">Diagnóstico/Observaciones de Carls uu</h1>
        <form action="" id="formulario">
            <label for="txtUsuario">
                <span>Compartir dieta con usuario...</span>
                <br>
                <input type="text" id="txtUsuario">
            </label>
            <br>
            <h3>Selecciona la(s) dieta(s) a compartir:</h3>

            <div class="dietas">
                <h5>Total de registros: 2</h5>
                <label for="chkDiabetes">
                    <input type="checkbox" name="chkDiabetes" id="chkDiabetes">
                    <span>Diabetes</span>
                </label>
                <br>
                <label for="chkPeso">
                    <input type="checkbox" name="chkPeso" id="chkPeso">
                    <span>Subir de peso</span>
                </label>
            </div>

            <br>
            <input type="submit" value="Compartir" id="btnGuardar">
        </form>
    </main>
    <footer>
        <h5>Sitio diseñado por equipo 6</h5>
    </footer>
</body>
</html>