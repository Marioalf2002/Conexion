<?php
    $directorio = 'archivos';
    $contArchivos = 0;
    $num = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="caja">
        <h1>Archivos subidos al directorio</h1>
        <?php
            if ($dir = opendir($directorio)) {
                while ($archivo = readdir($dir)) {
                    if ($archivo != '.' && $archivo != '..') {
                        $contArchivos ++;
                        $num ++;
                        echo "Archivo $num: <strong>$archivo</strong><br>";
                    }
                }
                echo "Total de archivos: <strong>$contArchivos</strong>";
            }
        ?>
    </div>
    </p>
    <a href="escribir.php">
        <input type="submit" value="Crear Archivo" name="crear">
    </a>
    <a href="subir.php">
        <input type="submit" value="Subir Archivos">
    </a>
</body>
</html>