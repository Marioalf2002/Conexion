<?php

$msg = null;
if (isset($_POST["escribir"])) {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $extension = htmlspecialchars($_POST["extension"]);
    $contenido = $_POST["contenido"];

    $ruta = "archivos/" . $nombre . $extension;
    $manejador = fopen($ruta, 'a');
    
    if (fwrite($manejador, $contenido)) {
        $msg = "Archivo creado.";
        $msg .= "Puedes verlos en: <a href='$ruta'  target='_blank'>$ruta</a>";
    } else {
        $msg = "Error al crear el archivo";
    }

    fclose($manejador);
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
    <h1>Crear y escribir ficehro con PHP</h1>
    <strong><?php echo $msg ?></strong>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <table>
            <tr>
                <td>Nombre del archivo: </td>
                <td><input type="text" name="nombre"></td>
            </tr>
            <tr>
                <td>Extension del archivo: </td>
                <td>
                    <select name="extension">
                        <option value=".txt">.txt</option>
                        <option value=".html">.html</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Contenido del archivo: </td>
                <td><textarea name="contenido" cols="30" rows="10"></textarea></td>
            </tr>
        </table>
        <input type="hidden" name="escribir">
        <input type="submit" value="Crear archivo">
    </form>
</body>

</html>