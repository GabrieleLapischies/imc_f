<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <link rel="stylesheet" type="text/css"  href="css/style.css">
</head>
<body>
    <form action="calc_imc.php" id="calc" method="post">
    <h1> Cálculando o IMC <h1>
        Peso: <input name="ps" type="text"><br>
        Altura: <input name="al" type="text"><br>
        <input name="li" type="reset" value="limpar">
        <input name="en" type="submit" value="enviar">
    </form>
</body>
</html>
