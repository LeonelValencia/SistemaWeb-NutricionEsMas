let txtPeso = document.getElementById("txtPeso");
let txtAltura = document.getElementById("txtAltura");
let lblImc = document.getElementById("imc")
const malBajo = document.getElementById("malBajo")
const bien = document.getElementById("bien");
const masOmenos = document.getElementById("masOmenos")
const malAlto = document.getElementById("malAlto")
const categoria = document.getElementById("categoria")
const resultadoIMC = document.getElementById("resultadoIMC")

function calcularIMC() {
    if (txtAltura.value.length == 0 && txtPeso.value.length == 0) {
        alert("Ingrese los datos")
    }else{
        let alturaMetros= txtAltura.value/100
        let imc= (txtPeso.value/(Math.pow(alturaMetros,2))).toFixed(2)
        lblImc.innerHTML=imc
        resultadoIMC.style.display = "block"
        if (imc<18.5) {
            categoria.innerHTML="Bajo de peso"
            malBajo.classList.add("mal")
            bien.classList.remove("bien")
            masOmenos.classList.remove("masomenos")
            malAlto.classList.remove("mal")
        }else if (imc>=18.5 && imc<25) {
            categoria.innerHTML="Normal"
            bien.classList.add("bien")
            malBajo.classList.remove("mal")
            masOmenos.classList.remove("masomenos")
            malAlto.classList.remove("mal")
        }else if (imc>=25 && imc<30) {
            categoria.innerHTML="Sobrepeso"
            masOmenos.classList.add("masomenos")
            bien.classList.remove("bien")
            malBajo.classList.remove("mal")
            malAlto.classList.remove("mal")
        } else {
            categoria.innerHTML="Obesidad"
            malAlto.classList.add("mal")
            masOmenos.classList.remove("masomenos")
            bien.classList.remove("bien")
            malBajo.classList.remove("mal")
        }
    }   
}