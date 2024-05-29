<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto Cinco</title>
</head>
<body>
    <?php
        $altura = $_REQUEST['valor'];
        if($altura <= 150){
            echo "Persona de baja altura";
        }
        if($altura > 150 && $altura <= 170){
            echo "Persona de altura media";
        }
        if($altura >= 171){
            echo "Persona alta";
        }
    ?>
</body>
</html>