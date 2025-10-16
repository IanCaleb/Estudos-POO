<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="global.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Criar Controle</a></li>
            <li><a href="usarControle.php">Usar Controles</a></li>
        </ul>
    </nav>

    <h1>Criar controle remoto</h1>
    
    <main>
        <form action="usarControle.php" method="get">
            <label for="idcor">Cor do controle:</label><br>
            <input type="color" name="cor" id="idcor"><br>

            <label for="idmarca">Marca:</label><br>
            <input type="text" name="marca" id="idmarca"><br>

            <label for="idpilha">Quantas pilhas:</label><br>
            <input type="number" name="pilha" id="idpilha" min="1" max="4"><br>

            <input type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>