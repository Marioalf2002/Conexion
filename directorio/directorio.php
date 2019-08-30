<?php
$listar = null;
$directorio = opendir("../../ficheros/");
while ($elemento = readdir($directorio)) {
    if ($elemento != '.' && $elemento != '..') {
        if (is_dir("../../ficheros/" . $elemento)) {
            $listar .= "<li><a href='../../ficheros/$elemento'>$elemento/</li>";
        } else {
            $listar .= "<li><a href='../../ficheros/$elemento'>$elemento</li>";
        }
    }
}
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
    <h1>Listar archivos y carpetas de un directorio</h1>
    <h3>Listado de archivos y carpetas del directorio "archivos/"</h3>
    <ul>
        <?php echo $listar ?>
    </ul>
    <hr>
</body>

</html>
<?php
/**
 * Funcion que muestra la estructura de carpetas a partir de la ruta dada.
 */

function obtener_estructura_directorios($ruta){
    // Se comprueba que realmente sea la ruta de un directorio
    if (is_dir($ruta)){
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
        echo "<ul>";

        // Recorre todos los elementos del directorio
        while (($archivo = readdir($gestor)) !== false)  {
                
            $ruta_completa = $ruta . "/" . $archivo;

            // Se muestran todos los archivos y carpetas excepto "." y ".."
            if ($archivo != "." && $archivo != "..") {
                // Si es un directorio se recorre recursivamente
                if (is_dir($ruta_completa)) {
                    echo "<li>" . $archivo . "</li>";
                    obtener_estructura_directorios($ruta_completa);
                } else {
                    echo "<li>" . $archivo . "</li>";
                }
            }
        }
        
        // Cierra el gestor de directorios
        closedir($gestor);
        echo "</ul>";
    } else {
        echo "No es una ruta de directorio valida<br/>";
    }
}
?>