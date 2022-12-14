<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/calculadoraIMC.css" rel="stylesheet" />
    <title>Calculadora IMC</title>
</head>
<body>
    <?php include("./cabecera.php")?>
    <main>
        <h1 class="titulo">Calculadora de IMC</h1>
        <h4>Proporciona los datos que se te piden para calcular el IMC</h4>
        <form action="" id="formulario">
            <div class="grid">
                <label for="txtPaciente">
                    <span>Paciente*:</span>
                    <input type="text" id="txtPaciente">
                </label>
                <label for="date">
                    <span>Fecha*:</span>
                    <input type="date" id="date">
                </label>
                <label for="txtPeso" class="labelPesoAlt">
                    <span>Peso*:</span>
                    <input type="number" id="txtPeso" min="10" class="pesoAlt">
                    <h5>kgs</h5>
                </label>
                <label for="txtAltura" class="labelPesoAlt">
                    <span>Altura*:</span>
                    <input type="number" id="txtAltura" min="50" class="pesoAlt">
                    <h5>cms</h5>
                </label>
            </div>
            <input type="button" value="Calcular" id="btnCalcular" class="btn" onclick="calcularIMC()">
            <br>
            <div id="resultadoIMC" style="display: none;">
                <h4>Tu IMC es:</h4>
                <h4 id="imc">18.75</h4>
                <h3 id="categoria">N</h3>
                <table>
                    <tr>
                        <th>IMC</th>
                        <th>Nivel de peso</th>
                    </tr>
                    <tr class="negroLetra" id="malBajo">
                        <td>Por debajo de 18.5</td>
                        <td>Bajo de peso</td>
                    </tr>
                    <tr class="negroLetra" id="bien">
                        <td>18.5-24.9</td>
                        <td>Normal</td>
                    </tr>
                    <tr class="negroLetra" id="masOmenos">
                        <td >25.0-29.9</td>
                        <td>Sobrepeso</td>
                    </tr>
                    <tr class="negroLetra" id="malAlto">
                        <td>30 o m??s</td>
                        <td>Obesidad</td>
                    </tr>
                </table>
            </div>
            <input type="submit" value="Guardar" id="btnGuardar" class="btn">
        </form>
    </main>
    <footer>
        <h5>Sitio dise??ado por equipo 6</h5>
    </footer>
    <script src="../admin/js/calculadoraIMC.js"></script>
</body>
</html>