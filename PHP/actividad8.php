<html>
    <body>
<?php
function compararNumeros($num1, $num2) {
    if ($num1 > $num2) {
        echo "El número mayor es: $num1";
    } elseif ($num2 > $num1) {
        echo "El número mayor es: $num2";
    } else {
        echo "Ambos números son iguales.";
    }
}

?>
</body>
</heads>