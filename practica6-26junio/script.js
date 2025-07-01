function enviarEdad() {
    var edad=document.getElementById("edad").value;
    var parrafo=document.getElementById("resultado");
    if(edad == "" || edad<=0){
        parrafo.innerText="No se permiten edades negativas o vacías"
    }
    else if(edad>=1 && edad <13) {
        parrafo.innerText="Eres un niño"
    } else if(edad>=13 && edad<=17) {
        parrafo.innerText="Eres un adolescente"
    } else if(edad>=18 && edad<=59) {
        parrafo.innerText="Eres un adulto"
    } else if(edad>=60) {
        parrafo.innerText="Eres un adulto mayor"
    }
}