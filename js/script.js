let edad = 17;
if (edad>=18) {
    console.log("eres adulto")
} else if (edad>=13) {
    console.log("eres adolescente")
} else {
    console.log("eres chavito")
}
for(let i = 1; i<=5; i++) {
    console.log(i);
}
for(let i = 1;i<=3;i++) {
    for(let j = 1; j<=3;j++){
        console.log(`${i} x ${j} = ${i*j}`)
    }
}
let contador = 1;
while(contador <= 3) {
    console.log(contador);
    contador++;
}
let x = 1;
do {
    console.log(x);
    x++
} while(x<=3)
    let dia = "Miércoles";
    console.log("\nHoy es:", dia);
    
    switch (dia){
        case "Lunes":
            console.log("Inicio de semana");
            break;
        case "Viernes":
            console.log("¡Casi es fin de semana!");
            break;
        case "Sabado":
        case "Domingo":
            console.log("Fin de semana");
            break;
        default:
            console.log("Día normal");
    }