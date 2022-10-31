<!DOCTYPE HTML>
<html lang = "es">

<head>
    <meta charset = "utf-8">
    <title>Formularios en PHP</title>
</head>

<body>
    <form method = "POST" action = "recibir.php">

    <p>
        <label for = "nombre">Nombre</label>
        <input type = "text" name = "nombre"/>
        <label for = "apellido">Apellido</label>
        <input type = "text" name = "apellido"/>
    </p>

    <input type = "submit" value = "enviar datos"/>
        
    </form>
</body>

</html>