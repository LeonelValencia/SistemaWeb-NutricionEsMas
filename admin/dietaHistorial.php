<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/historialDietas.css" rel="stylesheet" />
    <title>Historial dietas</title>
</head>
<body>
    <?php include("./cabecera.php")?>
    <main>
        <h1>Tus dietas</h1>
        <h3 class="registros">Registros totales:<span>3</span></h3>

        <div class="dietas">
            <table>
                <tr id="titulosTabla">
                    <th>NOMBRE</th>
                    <th>COMIDAS</th>
                    <th>CAL. TOTALES</th>
                    <th>FECHA</th>
                    <th>MODIFICAR</th>
                    <th>ELIMINAR</th>
                </tr>
                <tr>
                    <td class="tituloDieta"><a href="./dietaVer.php">ENGORDAR</a></td>
                    <td>7</td>
                    <td>1183.08</td>
                    <td>2022-10-14 17:00</td>
                    <td>
                        <a href="./dietaManual.php"><img src="./assets/icons/edit.svg" alt="editar"></a>
                    </td>
                    <td class="ultimo"><img src="./assets/icons/trash.svg" alt="eliminar"></td>
                </tr>
                <tr>
                    <td class="tituloDieta">BAJAR DE PESO</td>
                    <td>4</td>
                    <td>1283.08</td>
                    <td>2022-10-13 18:00</td>
                    <td><img src="./assets/icons/edit.svg" alt=""></td>
                    <td class="ultimo"><img src="./assets/icons/trash.svg" alt=""></td>
                </tr>
                <tr>
                    <td class="tituloDieta">TITULO DE DIETA</td>
                    <td>5</td>
                    <td>1190.15</td>
                    <td>2022-09-14 12:00</td>
                    <td><img src="./assets/icons/edit.svg" alt=""></td>
                    <td class="ultimo"><img src="./assets/icons/trash.svg" alt=""></td>
                </tr>
            </table>
        </div>
    </main>
    <footer>
        <h5>Sitio dise??ado por equipo 6</h5>
    </footer>
</body>
</html>