<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['producto']) && isset($_POST['cantidad'])) {

    $usuario = $_POST["usuario"];
    $producto = $_POST["producto"];
    $cantidad = $_POST["cantidad"];

    switch ($producto) {
            case "Split portátil.":
                $precio = 1000;
                break;
            case "Sistemas de aire acondicionado centralizado.":
                $precio = 490;
                break;
            case "Unidades de ventana.":
                $precio = 139;
                break;
            case "Sistemas de aire acondicionado inverter.":
                $precio = 99;
                break;
            case "Sistemas de aire acondicionado con bomba de calor.":
                $precio = 2099;
                break;
            case "Aires acondicionados comerciales e industriales.":
                $precio = 3259;
                break;
            case "Split de techo.":
                $precio = 1200;
                break;
            case "Split portatil.":
                $precio = 1300;
                break;
            default:
                $precio = 0;
        }


        $archivo = "ventasPolar.txt";
        $nueva_compra = "$usuario,$producto,$precio,$cantidad\n";
        file_put_contents($archivo, $nueva_venta, FILE_APPEND);
    
        // Mostrar el mensaje de éxito
        echo "<p>Venta registrada correctamente.</p>";
    } else {
        // Redireccionar al formulario de registro si no se ha enviado el formulario
        header("Location: registrar venta.php");
        exit();
    }
?>

</body>
</html> 