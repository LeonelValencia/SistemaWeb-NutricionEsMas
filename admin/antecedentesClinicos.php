<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="./css/antecedentesClinicos.css" rel="stylesheet" />
    <title>Antecedentes clinicos</title>
</head>
<body>
    <?php include("./cabecera.php")?>
    <main>
        <a href="#" class="regresar">>>> Regresar a expediente <<<</a>
        <h1 class="titulo">Antecedentes clinicos de Salvador Acedo</h1>
        <form action="" id="formulario">
            <div class="grid">

                <div id="AntecedentesHeredo">
                    <h3>Antecedentes Heredo Familiares</h3>
                    <div class="antecedente">
                        <label for="chkDiabetes" class="form">
                                <input type="checkbox" name="" id="chkDiabetes" onclick="showAntecedente('agregarN1','divNotas1')">
                                <span>Diabetes</span> 
                        </label>
                        <h5 class="agregarN" id="agregarN1" style="display: none;" onclick="showNotas('divNotas1')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas1" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkSobrepeso" class="form">
                            <input type="checkbox" name="" id="chkSobrepeso" onclick="showAntecedente('agregarN2','divNotas2')">
                            <span>Sobrepeso</span>
                        </label>
                        <h5 class="agregarN" id="agregarN2" style="display: none;" onclick="showNotas('divNotas2')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas2" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkTiroides" class="form">
                            <input type="checkbox" name="" id="chkTiroides" onclick="showAntecedente('agregarN3','divNotas3')">
                            <span>Tiroides</span>
                        </label>
                        <h5 class="agregarN" id="agregarN3" style="display: none;" onclick="showNotas('divNotas3')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas3" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkPresionArt" class="form">
                            <input type="checkbox" name="" id="chkPresionArt" onclick="showAntecedente('agregarN4','divNotas4')">
                            <span>Presi??n Arterial</span>
                        </label>
                        <h5 class="agregarN" id="agregarN4" style="display: none;" onclick="showNotas('divNotas4')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas4" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkOncolo" class="form">
                            <input type="checkbox" name="" id="chkOncolo" onclick="showAntecedente('agregarN5','divNotas5')">
                            <span>Oncol??gico</span>
                        </label>
                        <h5 class="agregarN" id="agregarN5" style="display: none;" onclick="showNotas('divNotas5')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas5" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkOtrosHeredo" class="form">
                            <input type="checkbox" name="" id="chkOtrosHeredo" onclick="showNotas('divNotas6')">
                            <span>Otros</span>
                        </label>
                        <div class="divNotas" id="divNotas6" style="display: none;">
                            <h6>Notas*:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                
                <div id="antecedentesNoPato">
                    <h3>Antecedentes Personales No Patol??gicos</h3>
                    <div class="antecedente">
                        <label for="chkTabaquismo" class="form">
                            <input type="checkbox" name="" id="chkTabaquismo" onclick="showAntecedente('agregarN7','divNotas7')">
                            <span>Tabaquismo</span>
                        </label>
                        <h5 class="agregarN" id="agregarN7" style="display: none;" onclick="showNotas('divNotas7')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas7" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkAlcoholismo" class="form">
                            <input type="checkbox" name="" id="chkAlcoholismo" onclick="showAntecedente('agregarN8','divNotas8')">
                            <span>Alcoholismo</span>
                        </label>
                        <h5 class="agregarN" id="agregarN8" style="display: none;" onclick="showNotas('divNotas8')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas8" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkDeportes" class="form">
                            <input type="checkbox" name="" id="chkDeportes" onclick="showAntecedente('agregarN9','divNotas9')">
                            <span>Deportes</span>
                        </label>
                        <h5 class="agregarN" id="agregarN9" style="display: none;" onclick="showNotas('divNotas9')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas9" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkTiempo" class="form">
                            <input type="checkbox" name="" id="chkTiempo" onclick="showAntecedente('agregarN10','divNotas10')">
                            <span>Tiempo sin entrenar</span>
                        </label>
                        <div id="agregarN10" style="display: none;">
                            <input type="text" id="txtTiempo">
                            <input list="tiempos" name="tipoTiempo" id="tipoTiempo" placeholder="Tiempo...">
                            <datalist id="tiempos">
                            <option value="Dias">
                            <option value="Semanas">
                            <option value="Meses">
                            <option value="A??os">
                            </datalist>
                            <h5 class="agregarN" onclick="showNotas('divNotas10')">(Agregar Notas)</h5>
                        </div>
                        <div class="divNotas" id="divNotas10" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkOtrosNoPato" class="form">
                            <input type="checkbox" name="" id="chkOtrosNoPato" onclick="showNotas('divNotas11')">
                            <span>Otros</span>
                        </label>
                        <div class="divNotas" id="divNotas11" style="display: none;">
                            <h6>Notas*:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                
                <div id="antecedentesPato">
                    <h3>Antecedentes Personales Patol??gicos</h3>
                    <div class="antecedente">
                        <label for="chkAlergias" class="form">
                            <input type="checkbox" name="" id="chkAlergias" onclick="showAntecedente('agregarN12','divNotas12')">
                            <span>Alergias</span>
                        </label>
                        <h5 class="agregarN" id="agregarN12" style="display: none;" onclick="showNotas('divNotas12')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas12" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkPresionArtPato" class="form">
                            <input type="checkbox" name="" id="chkPresionArtPato" onclick="showAntecedente('agregarN13','divNotas13')">
                            <span>Presi??n Arterial</span>
                        </label>
                        <h5 class="agregarN" id="agregarN13" style="display: none;" onclick="showNotas('divNotas13')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas13" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkConstipacion" class="form">
                            <input type="checkbox" name="" id="chkConstipacion" onclick="showAntecedente('agregarN14','divNotas14')">
                            <span>Constipaci??n</span>
                        </label>
                        <h5 class="agregarN" id="agregarN14" style="display: none;" onclick="showNotas('divNotas14')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas14" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkRetencionL" class="form">
                            <input type="checkbox" name="" id="chkRetencionL" onclick="showAntecedente('agregarN15','divNotas15')">
                            <span>Retenci??n de L??quidos</span>
                        </label>
                        <h5 class="agregarN" id="agregarN15" style="display: none;" onclick="showNotas('divNotas15')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas15" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkQuirurgicos" class="form">
                            <input type="checkbox" name="" id="chkQuirurgicos" onclick="showAntecedente('agregarN16','divNotas16')">
                            <span>Quir??rgicos</span>
                        </label>
                        <h5 class="agregarN" id="agregarN16" style="display: none;" onclick="showNotas('divNotas16')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas16" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkEndocrinopatias" class="form">
                            <input type="checkbox" name="" id="chkEndocrinopatias" onclick="showAntecedente('agregarN17','divNotas17')">
                            <span>Endocrinopat??as</span>
                        </label>
                        <h5 class="agregarN" id="agregarN17" style="display: none;" onclick="showNotas('divNotas17')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas17" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkGastritis" class="form">
                            <input type="checkbox" name="" id="chkGastritis" onclick="showAntecedente('agregarN18','divNotas18')">
                            <span>Gastritis</span>
                        </label>
                        <h5 class="agregarN" id="agregarN18" style="display: none;" onclick="showNotas('divNotas18')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas18" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkColitis" class="form">
                            <input type="checkbox" name="" id="chkColitis" onclick="showAntecedente('agregarN19','divNotas19')">
                            <span>Colitis</span>
                        </label>
                        <h5 class="agregarN" id="agregarN19" style="display: none;" onclick="showNotas('divNotas19')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas19" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkHemorroides" class="form">
                            <input type="checkbox" name="" id="chkHemorroides" onclick="showAntecedente('agregarN20','divNotas20')">
                            <span>Hemorroides</span>
                        </label>
                        <h5 class="agregarN" id="agregarN20" style="display: none;" onclick="showNotas('divNotas20')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas20" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkHepatitis" class="form">
                            <input type="checkbox" name="" id="chkHepatitis" onclick="showAntecedente('agregarN21','divNotas21')">
                            <span>Hepatitis</span>
                        </label>
                        <h5 class="agregarN" id="agregarN21" style="display: none;" onclick="showNotas('divNotas21')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas21" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkDiabetesPato" class="form">
                            <input type="checkbox" name="" id="chkDiabetesPato" onclick="showAntecedente('agregarN22','divNotas22')">
                            <span>Diabetes</span>
                        </label>
                        <h5 class="agregarN" id="agregarN22" style="display: none;" onclick="showNotas('divNotas22')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas22" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkTratamientos" class="form">
                            <input type="checkbox" name="" id="chkTratamientos" onclick="showNotas('divNotas23')">
                            <span>Tratamientos Previos</span>
                        </label>
                        <div class="divNotas" id="divNotas23" style="display: none;">
                            <h6>Notas*:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkOtrosPato" class="form">
                            <input type="checkbox" name="" id="chkOtrosPato" onclick="showNotas('divNotas24')">
                            <span>Otros</span>
                        </label>
                        <div class="divNotas" id="divNotas24" style="display: none;">
                            <h6>Notas*:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                </div>

                <div id="factorEstres">
                    <h3>Factor de estres</h3>
                    <div class="antecedente">
                        <label for="chkEncamado" class="form">
                            <input type="checkbox" name="" id="chkEncamado" onclick="showAntecedente('agregarN25','divNotas25')">
                            <span>Paciente Encamado</span>
                        </label>
                        <h5 class="agregarN" id="agregarN25" style="display: none;" onclick="showNotas('divNotas25')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas25" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkAmbulatorio" class="form">
                            <input type="checkbox" name="" id="chkAmbulatorio" onclick="showAntecedente('agregarN26','divNotas26')">
                            <span>Paciente Ambulatorio</span>
                        </label>
                        <h5 class="agregarN" id="agregarN26" style="display: none;" onclick="showNotas('divNotas26')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas26" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkInanicion" class="form">
                            <input type="checkbox" name="" id="chkInanicion" onclick="showAntecedente('agregarN27','divNotas27')">
                            <span>Inanici??n moderada</span>
                        </label>
                        <h5 class="agregarN" id="agregarN27" style="display: none;" onclick="showNotas('divNotas27')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas27" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkPostquirurgico" class="form">
                            <input type="checkbox" name="" id="chkPostquirurgico" onclick="showAntecedente('agregarN28','divNotas28')">
                            <span>Postquirurgico</span>
                        </label>
                        <h5 class="agregarN" id="agregarN28" style="display: none;" onclick="showNotas('divNotas28')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas28" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkPeritonitis" class="form">
                            <input type="checkbox" name="" id="chkPeritonitis" onclick="showAntecedente('agregarN29','divNotas29')">
                            <span>Peritonitis</span>
                        </label>
                        <h5 class="agregarN" id="agregarN29" style="display: none;" onclick="showNotas('divNotas29')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas29" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkFractura" class="form">
                            <input type="checkbox" name="" id="chkFractura" onclick="showAntecedente('agregarN30','divNotas30')">
                            <span>Fractura</span>
                        </label>
                        <h5 class="agregarN" id="agregarN30" style="display: none;" onclick="showNotas('divNotas30')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas30" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkCancer" class="form">
                            <input type="checkbox" name="" id="chkCancer" onclick="showAntecedente('agregarN31','divNotas31')">
                            <span>C??ncer</span>
                        </label>
                        <h5 class="agregarN" id="agregarN31" style="display: none;" onclick="showNotas('divNotas31')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas31" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkInfeccion" class="form">
                            <input type="checkbox" name="" id="chkInfeccion" onclick="showAntecedente('agregarN32','divNotas32')">
                            <span>Infecci??n severa</span>
                        </label>
                        <h5 class="agregarN" id="agregarN32" style="display: none;" onclick="showNotas('divNotas32')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas32" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkTrauma" class="form">
                            <input type="checkbox" name="" id="chkTrauma" onclick="showAntecedente('agregarN33','divNotas33')">
                            <span>Trauma M??ltiple</span>
                        </label>
                        <h5 class="agregarN" id="agregarN33" style="display: none;" onclick="showNotas('divNotas33')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas33" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkQuemadura10" class="form">
                            <input type="checkbox" name="" id="chkQuemadura10" onclick="showAntecedente('agregarN34','divNotas34')">
                            <span>Quemaduras 10%-30 % SCQ</span>
                        </label>
                        <h5 class="agregarN" id="agregarN34" style="display: none;" onclick="showNotas('divNotas34')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas34" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkQuemadura30" class="form">
                            <input type="checkbox" name="" id="chkQuemadura30" onclick="showAntecedente('agregarN35','divNotas35')">
                            <span>Quemaduras 30%-50 % SCQ</span>
                        </label>
                        <h5 class="agregarN" id="agregarN35" style="display: none;" onclick="showNotas('divNotas35')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas35" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkQuemadura50" class="form">
                            <input type="checkbox" name="" id="chkQuemadura50" onclick="showAntecedente('agregarN36','divNotas36')">
                            <span>Quemaduras > 50 SCQ</span>
                        </label>
                        <h5 class="agregarN" id="agregarN36" style="display: none;" onclick="showNotas('divNotas36')">(Agregar Notas)</h5>
                        <div class="divNotas" id="divNotas36" style="display: none;">
                            <h6>Notas:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="antecedente">
                        <label for="chkOtrosFact" class="form">
                            <input type="checkbox" name="" id="chkOtrosFact" onclick="showNotas('divNotas37')">
                            <span>Otros</span>
                        </label>
                        <div class="divNotas" id="divNotas37" style="display: none;">
                            <h6>Notas*:</h6>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            
            <input type="submit" value="Guardar" id="btnGuardar">
        </form>
    </main>
    <footer>
        <h5>Sitio dise??ado por equipo 6</h5>
    </footer>

    <script src="./js/antecedentesClinicos.js"></script>
</body>
</html>