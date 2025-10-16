<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 003</title>
</head>
<body>
    <?php 
        require_once 'Caneta.php';

        $c1 = new Caneta();

        $c1->modelo = "Bic Cristal";

        var_dump($c1);
    ?>
    
</body>
</html>