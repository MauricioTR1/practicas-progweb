var display = document.getElementById("display");
function agregarAlDisplay(simbolo) {
    display.value += simbolo;
}
function vaciarDisplay() {
    display.value = "";
}
function quitarUnoDisplay() {
    display.value = display.value.slice(0, -1);
}
function resolver() {
    var ans = eval(display.value);
    try {
        display.value = ans;
    } catch (error) {
        display.value = 'Error';
    }
    
    
}