<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleta de Calificaciones</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 25px;
        }

        p {
            font-size: 1.1em;
            margin-bottom: 10px;
            color: #555;
        }

        .result-box {
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
            font-weight: bold;
            font-size: 1.2em;
            color: white;
        }

        .result-box.aprobado {
            background-color: #4CAF50;
        }

        .result-box.reprobado {
            background-color: #f44336;
        }

        .date-time {
            font-size: 0.9em;
            color: #777;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Boleta de Calificaciones</h1>
        <?php
        $nombreEstudiante = "Juan Pérez";
        $nota1 = 7.5;
        $nota2 = 8.0;
        $nota3 = 6.0;
        $nota4 = 10.0;

        function calculaPromedio($nota1, $nota2, $nota3, $nota4)
        {
            $suma = $nota1 + $nota2 + $nota3 + $nota4;
            $prom = $suma / 4;
            return round($prom, 2);
        }

        function apruebaOReprueba($promedio)
        {
            if ($promedio >= 6) {
                return "Aprobado";
            } else {
                return "Reprobado";
            }
        }

        $promedio = calculaPromedio($nota1, $nota2, $nota3, $nota4);

        function obtenerFechaHora()
        {
            date_default_timezone_set("America/Mexico_City");
            return date("d-m-Y H:i:s");
        }

        function calculaRendimiento($promedio)
        {
            if ($promedio <= 10 && $promedio >= 9) {
                return "Excelente";
            } elseif ($promedio <= 8.9 && $promedio >= 7) {
                return "Bueno";
            } elseif ($promedio <= 6.9 && $promedio >= 6) {
                return "Regular";
            } else {
                return "Deficiente";
            }
        }

        echo "<p><strong>Nombre del Estudiante:</strong> $nombreEstudiante</p>";
        echo "<p><strong>Nota 1:</strong> $nota1</p>";
        echo "<p><strong>Nota 2:</strong> $nota2</p>";
        echo "<p><strong>Nota 3:</strong> $nota3</p>";
        echo "<p><strong>Nota 4:</strong> $nota4</p>";

        $estadoAprobacion = apruebaOReprueba($promedio);
        $clasePromedio = ($estadoAprobacion == "Aprobado") ? "aprobado" : "reprobado";

        echo "<div class='result-box " . $clasePromedio . "'>";
        echo "<p><strong>Tu promedio es:</strong> " . $promedio . "</p>";
        echo "<p><strong>Estado:</strong> " . $estadoAprobacion . "</p>";
        echo "</div>";

        echo "<p><strong>Tu rendimiento fue:</strong> " . calculaRendimiento($promedio) . "</p>";
        echo "<p class='date-time'><strong>Fecha y hora:</strong> " . obtenerFechaHora() . "</p>";
        ?>
    </div>
</body>

</html>