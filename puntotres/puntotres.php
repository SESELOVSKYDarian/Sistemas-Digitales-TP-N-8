<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto Tres</title>
</head>
<body>
    <?php
        switch($_REQUEST['valor']){
            case "1":
                echo "Lunes";
                break;
            case "2":
                echo "Martes";
                break;
            case "3":
                echo "Miércoles";
                break;
            case "4":
                echo "Jueves";
                break;
            case "5":
                echo "Viernes";
                break;
            case "6":
                echo "Sábado";
                break;
            case "7":
                echo "Domingo";
                break;
            default:
                "No está dentro del uno al siete";
        }
    ?>
</body>
</html>