<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'Caneta.php'; 

        $c1 = new Caneta("Bic Cristal", "Preta", 0.7, 100);

        /*
            $c1->setModelo('Cristal');
            $c1->setCor("Azul");
            $c1->setPonta(0.7);
            $c1->setCarga(100);
            $c1->setTampada(true);
        */

        print_r($c1);

        echo"<br/><br/><br/>";

        echo"Eu tenho uma caneta " . $c1->getModelo() . ". A ponta dela é " . $c1->getPonta();
    ?>
    
</body>
</html>