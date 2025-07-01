function calcular() {
    var num1 = document.getElementById("num1").value;
    var num2 = document.getElementById("num2").value;
    var operador = document.getElementById("operador").value;
    var resultadoText = document.getElementById("resultado");
    var resultado;
    if(num1 == "" || num2 == "") {
        resultadoText.innerText="No deben haber números vacíos!";
    }
    else {
        switch (operador) {
            case "+":
                resultado=parseFloat(num1)+parseFloat(num2);
                resultadoText.innerText=resultado;
                break;
            case "-":
                resultado=parseFloat(num1)-parseFloat(num2);
                resultadoText.innerText=resultado;
                break;
            case "*":
                resultado=parseFloat(num1)*parseFloat(num2);
                resultadoText.innerText=resultado;
                break;
            case "/":
                resultado=parseFloat(num1)/parseFloat(num2);
                resultadoText.innerText=resultado;
                break;
            case "%":
                resultado=parseFloat(num1)%parseFloat(num2);
                resultadoText.innerText=resultado;
                break;
            case "==":
                resultado=num1==num2;
                resultadoText.innerText=resultado;
                break;
            case "!=":
                resultado=num1!=num2;
                resultadoText.innerText=resultado;
                break;
            case ">":
                resultado=num1>num2;
                resultadoText.innerText=resultado;
                break;
            case "<":
                resultado=num1<num2;
                resultadoText.innerText=resultado;
                break;
            case "&&":
                resultado=num1 && num2;
                resultadoText.innerText=resultado;
                break;
            case "||":
                resultado=num1 || num2;
                resultadoText.innerText=resultado;
                break;
            case "++":
                resultado=++num1;
                resultadoText.innerText=resultado;
                break;
            case "--":
                resultado=--num1;
                resultadoText.innerText=resultado;
                break;
            default:
                resultadoText.innerText="Ingresa un operador valido";
        }
    }
    
}