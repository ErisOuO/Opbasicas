<?php
function suma($a, $b) {
    return $a + $b;
}

function resta($a, $b) {
    return $a - $b;
}

function multiplicacion($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    if ($b == 0) {
        return "El valor 2 no puede ser 0";
    }
    return $a / $b;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operacion) {
            case "+":
                $resultado = suma($num1, $num2);
                break;
            case "-":
                $resultado = resta($num1, $num2);
                break;
            case "*":
                $resultado = multiplicacion($num1, $num2);
                break;
            case "/":
                $resultado = division($num1, $num2);
                break;
            default:
                $resultado = "Ingrese una opcion valida";
        }
    } else {
        $resultado = "Algun valor ingresado no es valido";
    }
    echo "<h1>Resultado: $resultado</h1>";
}
?>
