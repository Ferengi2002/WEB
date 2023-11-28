<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Formulario Con Get
    </h1>
    <form method= "GET" action = "paginaconGET.php">
        Nombre: <input type="text" name="nombre"><br>
        Mail: <input type="text" name="mail"><br>
        Num.Tarjeta: <input type="text" name="tarjeta"><br>
        CVV: <input type="text" name="cvv"><br>
        <input type="submit" value="Realizar el Pago"/>
    </form>

    <br>
    <h1>
        Formulario con POST
    </h1>
    <form method= "POST" action = "paginaconPOST.php">
        Nombre: <input type="text" name="nombre"><br>
        Mail: <input type="text" name="mail"><br>
        Num.Tarjeta: <input type="text" name="tarjeta"><br>
        CVV: <input type="text" name="cvv"><br>
        <input type="submit" value="Realizar el Pago"/>
    </form>
</body>
</html>