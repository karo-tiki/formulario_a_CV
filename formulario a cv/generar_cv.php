<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Generado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recopila los datos del formulario
        $nombre = $_POST["Nombre"];
        $apellidos = $_POST["Apellido"];
        $fechaNacimiento = $_POST["Nacimiento"];
        $ocupacion = $_POST["ocupacion"];
        $celular = $_POST["Celular"];
        $email = $_POST["email"];
        $nacionalidad = $_POST["Nacionalidad"];
        $nivelIngles = $_POST["Nivel_de_ingles"];
        $aptitud = $_POST["Aptitud"];
        $habilidades = $_POST["habilidades"];
        $perfil = $_POST["perfil"];
        
        echo "<h2>Currículum Vitae</h2>";
        echo "<p><strong>Nombre:</strong> $nombre $apellidos</p>";
        echo "<p><strong>Fecha de Nacimiento:</strong> $fechaNacimiento</p>";
        echo "<p><strong>Ocupación:</strong> $ocupacion</p>";
        echo "<p><strong>Teléfono:</strong> $celular</p>";
        echo "<p><strong>Correo Electrónico:</strong> $email</p>";
        echo "<p><strong>Nacionalidad:</strong> $nacionalidad</p>";
        echo "<p><strong>Nivel de Inglés:</strong> $nivelIngles</p>";
        echo "<h3>Aptitudes:</h3>";
        echo "<p>$aptitud</p>";
        echo "<h3>Habilidades:</h3>";
        foreach ($habilidades as $habilidad) {
            echo "<p>$habilidad</p>";
        }
        echo "<h3>Perfil:</h3>";
        echo "<p>$perfil</p>";
        // Muestra y procesa otros campos del formulario aquí
    }
    ?>
</body>
</html>
