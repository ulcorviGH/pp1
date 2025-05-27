
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos recibidos</title>
</head>
<body>
    <h1>Datos del formulario recibidos</h1>

    <?php
    // Verificamos que los datos lleguen por POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"] ?? "No ingresado";
        $apellido = $_POST["apellido"] ?? "No ingresado";
        $sexo = $_POST["sexo"] ?? "No especificado";
        $ecivil = $_POST["ecivil"] ?? "No especificado";
        $info_ofertas = isset($_POST["info_ofertas"]) ? "Sí" : "No";
        $acepto_condiciones = isset($_POST["acepto_condiciones"]) ? "Sí" : "No";

        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Apellido:</strong> $apellido</p>";
        echo "<p><strong>Sexo:</strong> $sexo</p>";
        echo "<p><strong>Estado Civil:</strong> $ecivil</p>";
        echo "<p><strong>Desea recibir ofertas:</strong> $info_ofertas</p>";
        echo "<p><strong>Aceptó condiciones:</strong> $acepto_condiciones</p>";
    } else {
        echo "<p>No se recibieron datos del formulario.</p>";
    }
    ?>

    <a href="introduccion_html_ejercicio11">Volver al formulario</a>
</body>
</html>
