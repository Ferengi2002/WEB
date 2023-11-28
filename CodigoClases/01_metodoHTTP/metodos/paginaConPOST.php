<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagPOST</title>
</head>
<body>
    <p>Parametros enviados por el cliente:</p>
    <?php
        print_r($_POST)
    ?>
    <br>
    Nombre: <?php echo $_POST["nombre"]?><br>
</body>
</html>