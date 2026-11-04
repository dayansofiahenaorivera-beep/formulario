
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Inscripcion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="Resultado">
    <h1>Formulario de Inscripcion</h1>

    <form action="procesar.php" method="POST">

        <label>Nombre:</label>
        <input type="text" name="nombre">
        <br><br>

        <label>Correo:</label>
        <input type="email" name="correo">
        <br><br>

        <label>Edad:</label>
        <input type="number" name="edad">
        <br><br>

        <label>Curso:</label>
        <select name="curso">
            <option value="">Seleccione un curso</option>
            <option value="PHP">PHP</option>
            <option value="JavaScript">JavaScript</option>
            <option value="HTML y CSS">HTML y CSS</option>
        </select>
        <br><br>

        <label>Modalidad:</label>
        <select name="modalidad">
            <option value="">Seleccione una modalidad</option>
            <option value="Virtual">Virtual</option>
            <option value="Presencial">Presencial</option>
        </select>
        <br><br>

        <button type="submit">Inscribirse</button>

    </form>
</div>
</body>
</html>
