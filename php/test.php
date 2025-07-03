<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones Básicas en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            padding: 30px
        }
        h2 {
            color: #333;
        }
        .bloque {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <h2>Ejemplos de funciones básicas en PHP</h2>
    <div class="bloque">
        <h3>1. Saludo</h3>
        <?php
        function saludar($nombre) {
            return "Hola, $nombre";
        }
        echo saludar("Mauricio");
        ?>
    </div>
    <div class="bloque">
        <h3>2. Sumar dos números</h3>
        <?php
        function sumar($num1, $num2) {
            return $num1+$num2;
        }
        echo "La suma de 5+3 es: ". sumar(5,3);
        ?>
    </div>
    <div class="bloque">
        <h3>Calcular el promedio de un arreglo</h3>
        <?php
        function calcularPromedio($numeros) {
            $suma = array_sum($numeros);
            return $suma / count($numeros);
        }
        $notas = [9, 8.5, 10, 7];
        echo "Promedio de notas ". calcularPromedio($notas);
        ?>
    </div>
    <div class="bloque">
        <h3>Verificar si es mayor de edad</h3>
        <?php
        function esMayorDeEdad($edad) {
            return $edad >= 18? "Mayor de edad" : "Menor de edad";
        }
        $notas = [9, 8.5, 10, 7];
        echo "Edad 16: ". esMayorDeEdad(16);
        ?>
    </div>
    <div class="bloque">
        <h3>Convertir de celsius a farenheit</h3>
        <?php
        function celsiusAFahrenheit($c) {
            return ($c * 9 / 5) + 32;
        }
        echo "30°C son ". celsiusAFahrenheit(30), "F";
        ?>
    </div>
    <div class="bloque">
        <h3>Generar un número aleatorio entre 1 y 100</h3>
        <?php
        function generarAleatorio($min, $max) {
            return rand($min, $max);
        }
        echo "Número aleatorio entre 1 y 100: ". generarAleatorio(1, 100);
        ?>
    </div>
    <div class="bloque">
        <h3>Fecha y hora actual</h3>
        <?php
        function obtenerFechaHora() {
            date_default_timezone_set("America/Mexico_City");
            return date("Y-m-d H:i:s");
        }
        echo "Fecha y hora". obtenerFechaHora();
        ?>
    </div>
    <div class="bloque">
        <h3>Fecha y hora actual</h3>
        <?php
        function clasificaEdades($edades) {
            $prom = calcularPromedio($edades);
            if ($prom < 13) return "Niñez";
            elseif($prom < 20) return "Adolescencia";
            elseif($prom < 60) return "Adultez";
            else return "Vejez";
        }  
        $edades = [22,24,30,28];
        echo "Edades ", implode(", ", $edades) . "<br>";
        echo "Clasificación ". clasificaEdades($edades);
        ?>
    </div>
</body>
</html>