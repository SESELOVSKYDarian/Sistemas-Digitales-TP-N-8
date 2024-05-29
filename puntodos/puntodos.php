<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto Dos</title>
</head>
<body>
    <?php
        $valores = [];
        for ($i = 1; $i <= 10; $i++) {
            $valores[] = $_REQUEST["valor$i"];
        }
        $par = 0;
        $impar = 0;
        for ($i = 0; $i < 10; $i++) {
            if ($valores[$i] % 2 == 0) {
                $par++;
            }
            else {
                $impar++;
            }
        }
        echo "La cantidad de números pares es {$par}<br>";
        echo "La cantidad de números impares es {$impar}<br>";
    ?>
</body>
</html>