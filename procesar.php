
<?php

$nombre = $_POST['nombre'] ?? '';
$correo = $_POST['correo'] ?? '';
$edad = $_POST['edad'] ?? '';
$curso = $_POST['curso'] ?? '';
$modalidad = $_POST['modalidad'] ?? '';

$faltan = [];

if (trim($nombre) == '') {
    $faltan[] = "Nombre";
}

if (trim($correo) == '') {
    $faltan[] = "Correo";
}

if (trim($edad) == '') {
    $faltan[] = "Edad";
}

if (trim($curso) == '') {
    $faltan[] = "Curso";
}

if (trim($modalidad) == '') {
    $faltan[] = "Modalidad";
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado de Inscripción</title>

    <link rel="stylesheet" href="procesar.css">
</head>

<body>

    <div class="resultado">

        <?php

        if (count($faltan) > 0) {

            echo "<h1>Datos incompletos</h1>";

            foreach ($faltan as $dato) {
                echo "<p class='error'>Falta: " . $dato . "</p>";
            }

        } else {

            echo "<h1>Inscripción Recibida</h1>";

            echo "<p>Nombre: " . htmlspecialchars($nombre) . "</p>";
            echo "<p>Correo: " . htmlspecialchars($correo) . "</p>";
            echo "<p>Edad: " . htmlspecialchars($edad) . "</p>";
            echo "<p>Curso: " . htmlspecialchars($curso) . "</p>";
            echo "<p>Modalidad: " . htmlspecialchars($modalidad) . "</p>";

        }

        ?>

        <a href="formulario.php">Volver al formulario</a>

    </div>

</body>

</html>

