<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/agendarCitas.css" rel="stylesheet" />
    <title>Agendar citas</title>
</head>
<body>
    <?php include("./cabecera.php")?>
    <main>
        <a href="#" class="ubicacion">Inicio > Agenda/Citas</a> <br>
        <a href="#" class="regresar">>>> Regresar a registros <<<</a>
        <h1 class="titulo">Agregar cita a Eduardo Zurita</h1>
        <form action="" id="formulario">
            <label for="txtTituloCita" class="form">
                <span>Titulo*</span>
                <input type="text" id="txtTituloCita">
            </label>
            <br>

            <label for="deDate" class="form">
                <span>De*</span>
                <input type="date" id="deDate">
                <input type="time" id="deTime">
            </label>
            <br>

            <label for="aDate" class="form">
                <span>A*</span>
                <input type="date" id="aDate">
                <input type="time" id="aTime">
            </label>
            <br>

            <label for="txtDescripcion"class="form">
                <span>Descripción</span> <br>
                <textarea name="txtDescripcion" id="txtDescripcion"></textarea>
            </label>
            <br>

            <label for="chkMail" class="form">
                <input type="checkbox" id="chkMail">
                <span class="email">Enviar e-mail de cita a usuario</span>
            </label>
            <br>
            <input type="submit" value="Guardar" id="btnGuardar">
        </form>
    </main>
    <footer>
        <h5>Sitio diseñado por equipo 6</h5>
    </footer>
</body>
</html>