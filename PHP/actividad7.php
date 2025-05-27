<html>
    <head>
<?php
function volumenCilindro($radio, $altura) {
    $numeroPi = 3.1416;
    $volumen = $numeroPi * $radio * $radio * $altura;
    return $volumen;
}

// Ejemplo de uso
$radio = 2;
$altura = 4;
$resultado = volumenCilindro($radio, $altura);
echo "El volumen del cilindro es: " . $resultado;
?>
     </head>
</html>