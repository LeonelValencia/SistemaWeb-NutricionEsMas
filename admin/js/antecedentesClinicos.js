function showAntecedente(agregar,div) {
    const agregarN=document.getElementById(agregar);
    const divNotas=document.getElementById(div);
    let agregarNDisplay=agregarN.style.display
    if (agregarNDisplay == "none") {
        agregarN.style.setProperty("display","block")
    }else{
        agregarN.style.setProperty("display","none")
        divNotas.style.setProperty("display","none")
    }  
}
function showNotas(div) {
    const divNotas=document.getElementById(div);
    let divNotasDisplay=divNotas.style.display
    if (divNotasDisplay == "none") {
        divNotas.style.setProperty("display","flex")
    }else{
        divNotas.style.setProperty("display","none")
    }  
}