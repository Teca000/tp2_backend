<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp2_backend</title>
</head>
<body>
    <?php
    //EJERCICIO 1//
    $n = 22;
    if (is_numeric($n) && $n > 0) {
        echo "La variable 'n' es un numero positivo" . "<br>";
    } else {
        echo "La variable 'n' no es un numero positivo" . "<br>";
    }

    //EJERCICIO 2//
    $n = 6;
    if (is_numeric($n) && $n > 1 & $n <10) {
        echo "La variable 'n' es mayor que 1 y menor que 10" . "<br>";
    } else {
        echo "La variable 'n' no cumple con las condiciones" . "<br>";
    }

    //EJERCICIO 3//
    $n = 30;
    if(is_numeric($n) && ($n > 10 || $n < 2)) {
        echo "La variable 'n' es mayor a 10 y no es menor a 2" . "<br>";
    } else {
        echo "La variable 'n' es menor a 2 y no es mayor a 10" . "<br>";
    }

    //EJERCICIO 4//
    $numero1 = 26;
    $numero2 = 8;
    if($numero1 > $numero2) {
        echo ($numero1 + $numero2) . "<br>";
        echo ($numero1 - $numero2) . "<br>";
    } elseif ($numero2 > $numero1) {
        echo ($numero1 * $numero2) . "<br>";
        echo ($numero1 / $numero2) . "<br>";
             echo ($numero1 % $numero2) . "<br>";
    } else {
        echo "Los numeros son iguales";
    }


    ?>
    
    
</body>
</html>