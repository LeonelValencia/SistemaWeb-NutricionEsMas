<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/agregarUsuarios2.css" rel="stylesheet" />
    <title>Agregar usuario</title>
</head>
<body>
    <?php include("./cabecera.php")?>
    <main>
        <h1 class="titulo">Datos del usuario</h1>
        <form action="" id="formulario">
            <div class="grid">
                <label for="txtNombre">
                    <span>Nombre(s)*</span>
                    <input type="text" id="txtNombre" required>
                </label>
                <label for="txtAP">
                    <span>Apellido Paterno*</span>
                    <input type="text" id="txtAP" required>
                </label>
                <label for="txtAM">
                    <span>Apellido Materno</span>
                    <input type="text" id="txtAM">
                </label>
                <label for="txtEmail">
                    <span>Email*</span>
                    <input type="email" name="txtEmail" id="txtEmail" required>
                </label>
                <label for="txtPassword">
                    <span>Contraseña*</span>
                    <input type="password" name="txtPassword" id="txtPassword" required>
                </label>
                <label for="txtTel">
                    <span>Telefono</span>
                    <input type="tel" name="txtTel" id="txtTel">
                </label>
                <label for="generos">
                    <span>Genero*</span>
                    <!-- <input list="generos"> -->
                    <!-- <datalist id="generos">
                        <option value="Femenino">
                        <option value="Masculino">
                    </datalist> -->
                    <select id="generos" required>
                        <option value="Femenino">Femenino</option>
                        <option value="Masculino">Masculino</option>
                    </select>
                </label>
                <label for="objetos">
                    <span>Objetivos*</span>
                    <select id="objetos" required>
                        <option value="Perder peso">Perder peso</option>
                        <option value="Aumentar masa corporal">Aumentar masa corporal</option>
                        <option value="Mantener peso">Mantener peso</option>
                    </select>
                </label>
                <label for="actividadesFisicas">
                    <span>Actividad fisica*</span>
                    <select id="actividadesFisicas">
                        <option value="Sedentario">Sedentario</option>
                        <option value="Ligeramente activo">Ligeramente activo</option>
                        <option value="Moderadamente activo">Moderadamente activo</option>
                        <option value="Activo">Activo</option>
                        <option value="Muy activo">Muy activo</option>
                    </select>
                </label>
                <label for="txtPeso">
                    <span>Peso inicial*:</span>
                    <input type="number" name="txtPeso" id="txtPeso" min="30" required>
                </label>
                <label for="txtEstatura">
                    <span>Estatura*(cms):</span>
                    <input type="number" name="txtEstatura" id="txtEstatura" min="130" required>
                </label>
                <label for="txtDateNacimiento">
                    <span>Fecha de nacimiento:</span>
                    <input type="date" name="txtDateNacimiento" id="txtDateNacimiento">
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