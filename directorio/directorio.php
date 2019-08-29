<?php
$listar = null;
$directorio = opendir("../archivos/");
while ($elemento = readdir($directorio)) {
    if ($elemento != '.' && $elemento != '..') {
        if (is_dir("../archivos/" . $elemento)) {
            $listar .= "<li><a href='../archivos/$elemento' target='_blanck'>$elemento/</li>";
        } else {
            $listar .= "<li><a href='../archivos/$elemento' target='_blanck'>$elemento</li>";
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
</body>

</html>