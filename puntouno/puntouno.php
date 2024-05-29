<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto Uno</title>
</head>
<body>
    <?php
        $valores = [];
        for ($i = 1; $i <= 10; $i++) {
            $valores[] = $_REQUEST["valor$i"];
        }
        $suma = array_sum($valores);
        echo "La suma es {$suma}<br>";
        $mayor = $valores[0];
        $menor = $valores[0];
        for ($i = 1; $i < 10; $i++) {
            if ($valores[$i] > $mayor) {
                $mayor = $valores[$i];
            }
            if ($valores[$i] < $menor) {
                $menor = $valores[$i];
            }
        }
        echo "El mayor valor es {$mayor}<br>";
        echo "El menor valor es {$menor}<br>";
        $promedio = $suma / 10;
        echo "El promedio es de {$promedio}<br>"
    ?>
</body>
</html>