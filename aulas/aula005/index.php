<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php 

            require_once 'ContaBanco.php';

            $c = new ContaBanco();

            $c->abrirConta("cc");

            print_r($c);
        ?>

    </pre>
</body>
</html>