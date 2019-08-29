<?php

    $lineas = null;
    $mensaje = null;
    $total = 1;
    $ruta = "archivos/prueba.txt";
    $manejador = fopen($ruta, 'r');

    while (!feof($manejador)) {
        $lineas .= fgets($manejador);
        $total++;
    }

    $mensaje = "el total de filas del archivo $ruta es: $total";
    fclose($manejador);

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>

<body>
    <h1>lectura de ficheros con PHP </h1>
    <h3><?php echo $mensaje ?></h3>
    <h3>contenido :</h3>
    <?php echo  "<pre>$lineas</pre>" ?>

</body>

</html>