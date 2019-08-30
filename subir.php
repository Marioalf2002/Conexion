<?php
    $formatos = array('.jpg', '.png', '.txt', '.php');

    if (isset($_POST['boton'])) {
        $nombreArchivo = $_FILES['archivo']['name'];
        $nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
        $ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
        if(in_array($ext, $formatos)){
            if(move_uploaded_file($nombreTmpArchivo, "archivos/$nombreArchivo")){
                echo "Archivo $nombreArchivo subido con Exito.";
            }else{
                echo "Error archivo no subido.";
            }
        }else{
            echo "Archivo no permitido";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir archivos</title>
</head>
<body>
    <div class="caja">
        <form method="post" action="" enctype="multipart/form-data">
            <h1>Subiendo Archivos</h1>
            <input type="file" name="archivo"><br>
            <input type="submit" value="Subir" name="boton">
        </form>
        <a href="escribir.php">
            <input type="submit" value="Crear Archivo" name="crear">
        </a>
        <a href="contCarpeta.php">
            <input type="submit" value="Visualizar Contenido Carpeta" name="crear">
        </a>
    </div>
</body>
</html>