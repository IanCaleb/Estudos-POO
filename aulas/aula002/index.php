<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 002</title>
</head>
<body>
    <?php 
        require_once 'Caneta.php';

        $c1 = new Caneta;
        $c1->cor = 'Azul';
        $c1->ponta = 0.5;
        $c1->tampada = false; 

        $c1->tampar();
        $c1->destampar();

        $c1->rabiscar();

        echo($c1->cor);
        
    ?>
    
</body>
</html>